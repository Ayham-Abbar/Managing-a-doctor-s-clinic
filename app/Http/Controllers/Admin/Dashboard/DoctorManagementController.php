<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorManagementController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('admin.page.doctor.index', compact('doctors'));
    }
    public function create()
    {
        return view('admin.page.doctor.create');
    }
    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('admin.page.doctor.edit', compact('doctor'));
    }
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect()->route('doctors.index')->with('success', 'Doctor deleted successfully');
    }
    public function profile()
    {
        return view('admin.page.profile');
    }
}
