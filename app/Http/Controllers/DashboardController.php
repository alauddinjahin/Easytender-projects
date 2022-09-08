<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // dd(auth()->user()->usertype);
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
}
