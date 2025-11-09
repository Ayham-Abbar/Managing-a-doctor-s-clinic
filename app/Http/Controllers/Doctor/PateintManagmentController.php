<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Hash;

class PateintManagmentController extends Controller
{
    //
    public function index()
    {
        $patients = auth()->guard('doctor')->user()->patients;
        return view('doctor.patients.index', compact('patients'));
    }
     public function create(){
        return view('doctor.patients.create');
    }
    public function store(Request $request){

        $patient=$request->validate([
            'name'=>'required',
            'username'=>'nullable',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8',
            'phone'=>'nullable',
            'address'=>'nullable|string',
            'gender'=>'nullable',
            'date_of_birth'=>'nullable',
            'status'=>'nullable',
            'about'=>'nullable',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $patient['password']=Hash::make($request->password);
        if($request->hasFile('image')){
            $image=$this->uploadImage($request,'image','images/patient');
            $patient['image']=$image;
        }
        else{
            $patient['image']=null;
        }

        User::create([
            'name'=>$patient['name'],
            'username'=>$patient['username'],
            'email'=>$patient['email'],
            'password'=>$patient['password'],
            'phone'=>$patient['phone'],
            'address'=>$patient['address'],
            'gender'=>$patient['gender'],
            'date_of_birth'=>$patient['date_of_birth'],
            'status'=>$patient['status'],
            'about'=>$patient['about'],
            'image'=>$patient['image'],
        ]);
        return redirect()->route('doctor.patients.index')->with('success','Patient created successfully');
    }
    public function edit($id){
        $patient=User::findOrFail($id);
        return view('doctor.patients.edit',compact('patient'));
    }
    public function update(Request $request,$id){
        $patient=$request->validate([
            'name'=>'required',
            'username'=>'required',
            'email'=>'required|email|unique:users,email,'.$id,
            'phone'=>'nullable',
            'address'=>'nullable',
            'gender'=>'nullable',
            'date_of_birth'=>'nullable',
            'status'=>'nullable',
            'about'=>'nullable',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password'=>'nullable|min:8',
        ]);
        $oldPatient=User::findOrFail($id);

        if($request->hasFile('image')){
            $image=$this->updateImage($request,'image','images/patient',$id);
            $patient['image']=$image;
        }
        else{
            $patient['image']=$oldPatient->image;
        }
        if($patient['password']){
            $patient['password']=Hash::make($patient['password']);
        }
        else{
            $patient['password']=$oldPatient->password;
        }

        $oldPatient->update([
            'name'=>$patient['name'],
            'username'=>$patient['username'],
            'email'=>$patient['email'],
            'phone'=>$patient['phone'],
            'address'=>$patient['address'],
            'gender'=>$patient['gender'],
            'date_of_birth'=>$patient['date_of_birth'],
            'status'=>$patient['status'],
            'about'=>$patient['about'],
            'image'=>$patient['image'],
            'password'=>$patient['password'],
        ]);
        return redirect()->route('doctor.patients.index')->with('success','Patient updated successfully');
    }
    public function destroy($id){
        $patient=User::findOrFail($id);
        if($patient->image){
            $this->deleteImage($patient->image);
        }
        $patient->appointments()->delete();
        $patient->delete();
        return redirect()->route('doctor.patients.index')->with('success','Patient deleted successfully');
    }
}
