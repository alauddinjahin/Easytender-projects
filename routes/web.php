<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TenderMethodController;

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

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/about-us',[HomeController::class,'aboutUs'])->name('about_us');
Route::get('/contact-us',[HomeController::class,'contactUs'])->name('contact_us');
Route::get('/all-tender',[HomeController::class,'allTender'])->name('all_tender');


Route::group(['prefix'=>'admin', 'middleware' => ['auth','is_admin']], function () {
    Route::get('/',[DashboardController::class,'adminDashboard'])->name('admin.dashboard');
    Route::get('/tender-methods',[TenderMethodController::class, 'index'])->name('admin.tender.methods');
    Route::get('/tender-method-create',[TenderMethodController::class, 'create'])->name('tender_method_create');
    Route::post('/method-create',[TenderMethodController::class, 'store'])->name('method.create');
    Route::get('/method-delete/{id}',[TenderMethodController::class, 'destroy'])->name('method.destroy');
});

Route::group(['prefix'=>'client', 'middleware' => ['auth','is_client']], function () {
    Route::get('/', [DashboardController::class,'clientDashboard'])->name('client.dashboard');
    Route::post('/profile-update',[ProfileController::class,'profileUpdate'])->name('client.profile.update');
    Route::post('tender-store',[TenderController::class,'store'])->name('client.tender.store');
    Route::post('upload-file-to-freelancer',[TenderController::class,'upload_file_to_freelancer'])->name('upload_file_to_freelancer');
    
    Route::get('/offer-tender', function(){
        return view('frontend.pages.tender.offertender');
    });
});

Route::group(['prefix'=>'freelancer', 'middleware' => ['auth','is_freelancer']], function () {
    Route::get('/',[DashboardController::class, 'freelancerDashboard'])->name('freelancer.dashboard');
    Route::post('/profile-update',[ProfileController::class,'freelancerProfileUpdate'])->name('freelancer.profile.update');
    Route::get('/apply-job/{id}',[TenderController::class,'applyJob'])->name('apply.job');

    Route::get('/my-offer', function(){
        return view('frontend.pages.tender.myoffer');
    });
});



require __DIR__.'/auth.php';
