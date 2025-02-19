<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Specialization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Traits\ImageUploadTrait;

class DoctorManagementController extends Controller
{
    use ImageUploadTrait;
    public function index()
    {
        $doctors = Doctor::all();
        $specializations = Specialization::all();
        return view('admin.page.doctor.index', compact('doctors', 'specializations'));
    }
    public function create()
    {
        $specializations = Specialization::all();
        return view('admin.page.doctor.create', compact('specializations'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
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
            'specializations' => 'nullable',
        ]);
        $image = $this->uploadImage($request, 'image', 'doctors');
        $doctor = Doctor::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'image' => $image,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'experience' => $request->experience,
            'status' => $request->status,
            'about' => $request->about,
        ]);
        $doctor->specializations()->attach($request->specializations);
        return redirect()->route('doctor.index')->with('success', 'Doctor created successfully');
    }

    public function edit($id)
    {
        $doctor = Doctor::find($id);
        $specializations = Specialization::all();
        return view('admin.page.doctor.edit', compact('doctor', 'specializations'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:doctors,email,' . $id,
            'phone' => 'nullable|numeric',
            'address' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'gender' => 'nullable',
            'date_of_birth' => 'nullable',
            'experience' => 'nullable',
            'status' => 'nullable',
            'description' => 'nullable',
            'specializations' => 'nullable',
        ]);
        $doctor = Doctor::find($id);
        if ($request->hasFile('image')) {
            $image = $this->uploadImage($request, 'image', 'doctors');
        } else {
            $image = $doctor->image;
        }
        $doctor->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'image' => $image,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'experience' => $request->experience,
            'status' => $request->status,
            'about' => $request->about,
        ]);
        $doctor->specializations()->sync($request->specializations);
        return redirect()->route('doctor.index')->with('success', 'Doctor updated successfully');
    }
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        if ($doctor->image) {
            $this->deleteImage($doctor->image);
        }
        if ($doctor->specializations) {
            $doctor->specializations()->detach();
        }
        return redirect()->route('doctor.index')->with('success', 'Doctor deleted successfully');
    }
    public function profile()
    {
        return view('admin.page.profile');
    }
}
