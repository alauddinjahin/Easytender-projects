<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\TenderMethod;
use App\Models\User;
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
        $client_profile = Profile::firstWhere('user_id', Auth::user()->id);
        $tender_methods = TenderMethod::all();
        return view('frontend.pages.myaccount.client-dashboard', compact('client_profile','tender_methods'));
    }

    public function freelancerDashboard()
    {
        $freelancer_profile = Profile::firstWhere('user_id', Auth::user()->id);
        return view('frontend.pages.myaccount.freelancer-dashboard',compact('freelancer_profile'));
    }

}
