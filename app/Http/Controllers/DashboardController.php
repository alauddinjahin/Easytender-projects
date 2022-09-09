<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(auth()->user()->usertype === 'admin'){
            return redirect('/admin');
        }elseif(auth()->user()->usertype==='client'){
            return redirect('/client');
        }elseif (auth()->user()->usertype === 'freelancer') {
            return redirect('/freelancer');
        }else{
            return redirect()->back()->with('error', 'somthing is wrong');
        }
    }

    public function clientDashboard()
    {
        $id = Auth::user()->id;
        $client_profile = Profile::find($id);
        return view('frontend.pages.myaccount.client-dashboard', compact('client_profile'));
    }

}
