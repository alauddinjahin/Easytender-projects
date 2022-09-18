<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClientDashboardApiController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/get-tender',[ClientDashboardApiController::class,'getTender']);
Route::get('/get-bided-users',[ClientDashboardApiController::class,'getBiddedUsers']);
Route::get('/get-tender-by-id',[DashboardController::class,'getTenderById']);