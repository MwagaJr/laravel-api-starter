<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; 
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DashboardController;

Route::post('register', [AuthController::class,'register']);
Route::post('login', [AuthController::class,'login']);

Route::middleware('auth:sanctum')->group(function(){

    Route::post('logout', [AuthController::class,'logout']);
    Route::get('user', fn(Request $request) => $request->user());

    // Admin only
    Route::middleware('role:admin')->group(function(){
        Route::get('admin/dashboard', [DashboardController::class,'admin']);
    });

    // User only
    Route::middleware('role:user')->group(function(){
        Route::get('user/dashboard', [DashboardController::class,'user']);
    });
});

