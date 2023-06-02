<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => 'guest'] , function(){
    
    Route::post('/auth/login' , [AuthController::class , 'loginPost']);
});

Route::group(['middleware' => 'auth:sanctum'] , function(){

    Route::get('/dashboard' , [DashboardController::class, 'getDashboardData']);
});