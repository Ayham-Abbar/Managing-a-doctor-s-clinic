<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(){
        $appointments = Appointment::with('user','doctor','timeSlot')->get();
        return view('admin.page.appointment.index', compact('appointments'));
    }
    public function upcoming(){
        $appointments = Appointment::with('user','doctor','timeSlot')->where('status', 'pending')->get();
        return view('admin.page.appointment.upcoming-appointment', compact('appointments'));
    }
    public function completed(){
        $appointments = Appointment::with('user','doctor','timeSlot')->where('status', 'confirmed')->get();
        return view('admin.page.appointment.completed-appointment', compact('appointments'));
    }
    public function canceled(){
        $appointments = Appointment::with('user','doctor','timeSlot')->where('status', 'cancelled')->get();
        return view('admin.page.appointment.canceled-appointment', compact('appointments'));
    }
    public function clearAll(){
        $appointments = Appointment::where('status', 'cancelled')->get();
        if($appointments->count() > 0){
            foreach ($appointments as $appointment) {
                $appointment->delete();
            }
            return redirect()->back()->with('success', 'All cancelled appointments have been cleared.');
        }
        else{
            return redirect()->back()->with('error', 'No cancelled appointments found.');
        }
    }
}
