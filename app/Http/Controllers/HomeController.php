<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }
    public function allTender()
    {
        $all_tender = Tender::where('status','publish')->paginate(50);
        return view('frontend.pages.tender.alltender',compact('all_tender'));
    }

    public function contactUs()
    {
        return view('frontend.pages.contactus');
    }

    public function aboutUs()
    {
        return view('frontend.pages.aboutus');
    }

}
