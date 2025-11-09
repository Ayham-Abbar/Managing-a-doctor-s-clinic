<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Notifications\SendEmailCofirmAppointment;
use App\Models\User;
use App\Models\TimeSolt;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    //
    public function allAppointmentsDaily(){

          $appointments = Appointment::where('doctor_id', auth()->guard('doctor')->user()->id)
          ->whereNot('status', 'cancelled')
        ->whereHas('timeSlot', function ($query) {
            $query->whereDate('date', now()->toDateString());
        })
        ->with(['timeSlot', 'user', 'treatmentPlan'])
        ->get();
      

    return view('doctor.appointments.allAppointmentDaily', compact('appointments'));
    }
    public function getAllcancelAppointment(){

        $appointments = Appointment::where('doctor_id', auth()->guard('doctor')->user()->id)
            ->where('status', 'cancelled')
            ->with('timeSlot','user')
            ->get();

        return view('doctor.appointments.allCancelAppointment', compact('appointments'));
    }
    public function getAllCompletedAppointment(){

        $appointments = Appointment::where('doctor_id', auth()->guard('doctor')->user()->id)
            ->where('status', 'confirmed')
            ->with('timeSlot', 'user')
            ->get();

// طباعة النتائج للتأكد من صحتها
        return view('doctor.appointments.completedappointment', compact('appointments'));
    }
    public function updateStatus(Request $request)
    {
        $appointment = Appointment::find($request->appointment_id);

        if ($appointment) {
            $appointment->status = $request->status;
            $appointment->save();

            // إرسال إشعار للمستخدم
            $appointment->user->notify(new SendEmailCofirmAppointment($appointment));


            return response()->json(['success' => true]);
        }


        return response()->json(['success' => false]);
    }
    public function destroy($id){
        $appointment = Appointment::find($id);
        $appointment->delete();

        return redirect()->back()->with('success', 'Appointment deleted successfully');
    }
public function create()
{
    $doctor = auth()->guard('doctor')->user();

    $availableTimes = $doctor->availableTimes()->pluck('id');

    $timeSlots = TimeSolt::whereIn('available_time_id', $availableTimes)
        ->where('status', 'available')
        ->orderBy('date', 'asc')
        ->orderBy('start_time', 'asc')
        ->get();

    return view('doctor.appointments.createAppointment', compact('timeSlots'));
}


    public function searchPatients(Request $request)
{
    $search = $request->query('q');

    $patients = User::where('name', 'like', "%{$search}%")
        ->orWhere('email', 'like', "%{$search}%")
        ->take(10)
        ->get(['id', 'name', 'email']);

    return response()->json($patients);
}

public function storeAppointment(Request $request)
{

    // $request->validate([
    //     'user_id' => 'required',
    //     'time_slot_id' => 'required',
    // ]);


    $doctor = auth()->guard('doctor')->user();

    try {
        DB::transaction(function () use ($request, $doctor) {
            // إنشاء الموعد
            Appointment::create([
                'user_id' => $request->user_id,
                'doctor_id' => $doctor->id,
                'time_slot_id' => $request->time_slot_id,
                'status' => $request->status,
            ]);


            // تحديث حالة الـ time slot إلى unavailable
            DB::table('time_slots')
                ->where('id', $request->time_slot_id)
                ->update(['status' => 'unavailable']);
        });

        return redirect()
            ->route('doctor.appointments.all')
            ->with('success', 'Appointment created successfully.');

    } catch (\Exception $e) {
        return back()->with('error', 'Failed to create appointment: ' . $e->getMessage());
    }
}



}
