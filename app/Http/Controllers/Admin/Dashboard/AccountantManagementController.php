<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use App\Models\Accountant;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
class AccountantManagementController extends Controller
{
    use ImageUploadTrait;
    public function index(){
        $accountants=Accountant::all();
        return view('admin.page.accountant.index',compact('accountants'));
    }
    public function create(){
        return view('admin.page.accountant.create');
    }
    public function store(Request $request){
       $validator = $request->validate([
            'name'=>'required',
            'username'=>'required',
            'email'=>'required',
            'password'=>'required',
            'image'=>'nullable',
            'phone'=>'nullable',
            'address'=>'nullable',
            'date_of_birth'=>'nullable',
            'gender'=>'nullable',
            'experience'=>'nullable',
            'status'=>'nullable',
            'about'=>'nullable',
        ]);
        if($validator['image']){
            $image=$this->uploadImage($request,'image','images/accountant');
            $validator['image']=$image;
        }
        $accountant=Accountant::create([
            'name'=>$validator['name'],
            'username'=>$validator['username'],
            'email'=>$validator['email'],
            'password'=>Hash::make($validator['password']),
            'image'=>$validator['image'],
            'phone'=>$validator['phone'],
            'address'=>$validator['address'],
            'date_of_birth'=>$validator['date_of_birth'],
            'gender'=>$validator['gender'],
            'experience'=>$validator['experience'],
            'status'=>$validator['status'],
            'about'=>$validator['about'],
        ]);
        return redirect()->route('accountant.index')->with('success','Accountant created successfully');
    }
    public function edit($id){
        $accountant=Accountant::find($id);
        return view('admin.page.accountant.edit',compact('accountant'));
    }
    public function update(Request $request,$id){
        $validator = $request->validate([
            'name'=>'required',
            'username'=>'required',
            'password'=>'nullable',
            'email'=>'required',
            'phone'=>'nullable',
            'address'=>'nullable',
            'date_of_birth'=>'nullable',
            'gender'=>'nullable',
            'experience'=>'nullable',
            'status'=>'nullable',
            'about'=>'nullable',
            'image'=>'nullable',
        ]);
        $accountant=Accountant::findOrFail($id);
        if($request->hasFile('image')){
            $image=$this->updateImage($request,'image','images/accountant',$id);
            $validator['image']=$image;
        }
        else{
            $validator['image']=$accountant->image;
        }
        if($validator['password']){
            $validator['password']=Hash::make($validator['password']);
        }
        else{
            $validator['password']=$accountant->password;
        }
        $accountant->update([
            'name'=>$validator['name'],
            'username'=>$validator['username'],
            'email'=>$validator['email'],
            'phone'=>$validator['phone'],
            'address'=>$validator['address'],
            'date_of_birth'=>$validator['date_of_birth'],
            'gender'=>$validator['gender'],
            'experience'=>$validator['experience'],
            'status'=>$validator['status'],
            'about'=>$validator['about'],
            'image'=>$validator['image'],
            'password'=>$validator['password'],
        ]);
        return redirect()->route('accountant.index')->with('success','Accountant updated successfully');
    }
    public function destroy($id){
        $accountant=Accountant::findOrFail($id);
        $accountant->delete();
        if($accountant->image){
            $this->deleteImage($accountant->image);
        }
        return redirect()->route('accountant.index')->with('success','Accountant deleted successfully');
    }
}
