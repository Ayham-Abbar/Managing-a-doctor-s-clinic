<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Traits\ImageUploadTrait;
class DoctorManagementController extends Controller
{
    use ImageUploadTrait;
    public function index()
    {
        $doctors = Doctor::all();
        return view('admin.page.doctor.index', compact('doctors'));
    }
    public function create()
    {
        return view('admin.page.doctor.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:doctors',
            'password' => 'required|min:8',
            'phone' => 'nullable|numeric',
            'address' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gender' => 'nullable',
            'date_of_birth' => 'nullable',
            'experience' => 'nullable',
            'status' => 'nullable',
            'description' => 'nullable',
        ]);
        $image = $this->uploadImage($request, 'image', 'doctors');
        $doctor = Doctor::create([
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'image' => $image,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'experience' => $request->experience,
            'status' => $request->status,
            'description' => $request->description,
        ]);
        return redirect()->route('doctor.index')->with('success', 'Doctor created successfully');
    }
    
    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('admin.page.doctor.edit', compact('doctor'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:doctors,email,' . $id,
            'phone' => 'nullable|numeric',
            'address' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'gender' => 'nullable',
            'date_of_birth' => 'nullable',
            'experience' => 'nullable',
            'status' => 'nullable',
            'description' => 'nullable',
        ]);
        $image = $this->updateImage($request, 'image', 'doctors', $id);
        $doctor = Doctor::find($id);
        $doctor->update([
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'image' => $image,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'experience' => $request->experience,
            'status' => $request->status,
            'description' => $request->description,
        ]);
        return redirect()->route('doctor.index')->with('success', 'Doctor updated successfully');
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
