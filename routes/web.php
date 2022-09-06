<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/about-us', function(){
    return view('frontend.pages.aboutus');
});


Route::get('/contact-us', function(){
    return view('frontend.pages.contactus');
});

Route::get('/all-tender', function(){
    return view('frontend.pages.tender.alltender');
});

Route::get('/offer-tender', function(){
    return view('frontend.pages.tender.offertender');
});


Route::get('/my-offer', function(){
    return view('frontend.pages.tender.myoffer');
});


// Admin Route list 
Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
    Route::get('/', function(){
        return view('backend.admindashboard');
    });
});

Route::get('/client-dashboard',function(){
    return view('frontend.pages.myaccount.client-dashboard');
});

Route::get('/freelancer-dashboard',function(){
    return view('frontend.pages.myaccount.freelancer-dashboard');
});

require __DIR__.'/auth.php';
