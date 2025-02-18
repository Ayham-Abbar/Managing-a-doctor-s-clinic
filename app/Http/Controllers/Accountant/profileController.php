<?php

namespace App\Http\Controllers\Accountant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Accountant;
use App\Http\Requests\ProfileRequset;
class profileController extends Controller
{
    //
    public function index()
    {
        $accountant = auth()->guard('accountant')->user();


        return view('accountant.page.profile', compact('accountant'));
    }
    public function update(ProfileRequset $request)
    {

        $accountant = auth()->guard('accountant')->user();



        $experienceOld = $accountant->experience;


        if($request->has('experiences')){

            $accountant->update([
                'experience' => json_encode($request->input('experiences')),
            ]);

        }
        else{
           $accountant->update([
            'experience' => $experienceOld,
           ]);

        }
           $email = $request->email;

        if ($email != $accountant->email) {
            if (accountant::where('email', $email)->exists()) {
                return redirect()->route('accountant.profile.index')->with('error', 'Email already exists');
            }
            else{
                $accountant->update([
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

        return redirect()->route('accountant.profile.index')->with('success', 'Profile updated successfully');
            }

        }
        else{


        $accountant->update([
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



        return redirect()->route('accountant.profile.index')->with('success', 'Profile updated successfully');
    }
    }





    public function updateImage(Request $request)
    {

        $accountant = auth()->guard('accountant')->user();

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images/accountants'), $imageName);
        $accountant->image = $imageName;
        $accountant->save();
        return redirect()->route('accountant.profile.index')->with('success', 'Profile image updated successfully');
    }

}
