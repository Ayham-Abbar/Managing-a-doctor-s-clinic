<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequset;
use Illuminate\Http\Request;
use App\Models\Admin;

class profileController extends Controller
{
    //
    public function index()
    {
        $admin = auth()->guard('admin')->user();


        return view('admin.page.profile', compact('admin'));
    }
    public function update(ProfileRequset $request)
    {

        $admin = auth()->guard('admin')->user();



        $experienceOld = $admin->experience;


        if($request->has('experiences')){

            $admin->update([
                'experience' => json_encode($request->input('experiences')),
            ]);

        }
        else{
           $admin->update([
            'experience' => $experienceOld,
           ]);

        }
           $email = $request->email;

        if ($email != $admin->email) {
            if (admin::where('email', $email)->exists()) {
                return redirect()->route('admin.profile.index')->with('error', 'Email already exists');
            }
            else{
                $admin->update([
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

        return redirect()->route('admin.profile.index')->with('success', 'Profile updated successfully');
            }

        }
        else{


        $admin->update([
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



        return redirect()->route('admin.profile.index')->with('success', 'Profile updated successfully');
    }
    }





    public function updateImage(Request $request)
    {

        $admin = auth()->guard('admin')->user();

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images/admins'), $imageName);
        $admin->image = $imageName;
        $admin->save();
        return redirect()->route('admin.profile.index')->with('success', 'Profile image updated successfully');
    }


}

