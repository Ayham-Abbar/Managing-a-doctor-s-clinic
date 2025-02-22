<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Notifications\SendEmailCofirmAppointment;
class AppointmentController extends Controller
{
    //
    public function allAppointments(){
        $appointments = Appointment::where('doctor_id', auth()->guard('doctor')->user()->id)
            ->where('status', 'confirmed')
            ->with('timeSlot','user')
            ->get();    
        return view('doctor.appointments.allAppointment', compact('appointments'));
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
            ->where('date', now()->toDateString())
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

}
