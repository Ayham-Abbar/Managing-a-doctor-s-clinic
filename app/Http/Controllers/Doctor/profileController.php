<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequset;
use Illuminate\Http\Request;
use App\Models\Doctor;

class profileController extends Controller
{
    //
    public function index()
    {
        $doctor = auth()->guard('doctor')->user();


        return view('doctor.page.profile', compact('doctor'));
    }
    public function update(ProfileRequset $request)
    {

        $doctor = auth()->guard('doctor')->user();



        $experienceOld = $doctor->experience;


        if($request->has('experiences')){

            $doctor->update([
                'experience' => json_encode($request->input('experiences')),
            ]);

        }
        else{
           $doctor->update([
            'experience' => $experienceOld,
           ]);

        }
           $email = $request->email;

        if ($email != $doctor->email) {
            if (Doctor::where('email', $email)->exists()) {
                return redirect()->route('doctor.profile.index')->with('error', 'Email already exists');
            }
            else{
                $doctor->update([
                    'email' => $email,
                    'username' => $request->username,
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'address' => $request->address,
                    'about' => $request->about,

                    'website' => $request->website,
                    'twitter' => $request->twitter,
                    'facebook' => $request->facebook,
                    'linkedin' => $request->linkedin,

                ]);

        return redirect()->route('doctor.profile.index')->with('success', 'Profile updated successfully');
            }

        }
        else{


        $doctor->update([
            'email' => $email,
            'username' => $request->username,
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'about' => $request->about,

            'website' => $request->website,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
        ]);



        return redirect()->route('doctor.profile.index')->with('success', 'Profile updated successfully');
    }
    }





    public function updateImage(Request $request)
    {

        $doctor = auth()->guard('doctor')->user();

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images/doctors'), $imageName);
        $doctor->image = $imageName;
        $doctor->save();
        return redirect()->route('doctor.profile.index')->with('success', 'Profile image updated successfully');
    }


}

