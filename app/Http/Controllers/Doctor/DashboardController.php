<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\TimeSolt;
class DashboardController extends Controller
{
    //
    public function index(){
      
        $appointments = Appointment::where('doctor_id', auth()->guard('doctor')->user()->id)
        ->where('status', 'pending')
        ->get();

        return view('doctor.page.dashboard', compact('appointments'));
    }


}
