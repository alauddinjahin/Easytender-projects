<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function profileUpdate(Request $request)
    {
        $request->validate(Profile::$rules);

        $user_profile = Profile::firstWhere('user_id',Auth::user()->id);

        if (is_null($user_profile)) {
            if($request->file('photo')){
                $photo= $request->file('photo');
                $filename = 'profile-photo/'.date('YmdHi.').$photo->getClientOriginalExtension();
                $photo-> move(public_path('profile-photo'), $filename);
            }
    
            $profile = Profile::create([
                            'user_id' => Auth::user()->id,
                            'email'   => $request->email,
                            'photo'   => $filename,
                            'about'   => $request->about,
                            'address' => $request->address,
                        ]);
        } else {

            if($request->file('photo')){
                // if (file_exists('public/'.$user_profile->photo)) {
                    unlink($user_profile->photo);
                // }
                $photo= $request->file('photo');
                $filename = 'profile-photo/'.date('YmdHi.').$photo->getClientOriginalExtension();
                $photo-> move(public_path('profile-photo'), $filename);
            }
            
            $profile= $user_profile->update([
                            'email'   => $request->email,
                            'photo'   => $filename,
                            'about'   => $request->about,
                            'address' => $request->address,
                        ]);

        }
        if ($profile) {
            return redirect()->route('client.dashboard')->with('success', 'Profile Updated successfully!!');
        }
    }
}
