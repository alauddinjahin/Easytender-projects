<?php

use Illuminate\Support\Facades\Route;

// Frontend Route list

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/about-us', function(){
    return view('frontend.pages.aboutus');
});

Route::get('/contact-us', function(){
    return view('frontend.pages.contactus');
});

Route::get('/login', function(){
    return view('frontend.pages.login');
});

Route::get('/register', function(){
    return view('frontend.pages.registration');
});

Route::get('/all-tender', function(){
    return view('frontend.pages.tender.alltender');
});

Route::get('/offer-tender', function(){
    return view('frontend.pages.tender.offertender');
});

Route::get('/myaccount', function(){
    return view('frontend.pages.myaccount.userdashboard');
});

Route::get('/my-offer', function(){
    return view('frontend.pages.tender.myoffer');
});


// Admin Route list 
Route::group(['prefix'=>'admins','as'=>'admin.'], function(){
    Route::get('/', function(){
        return view('backend.admindashboard');
    });
});



