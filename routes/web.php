<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/login', [UserController::class, 'loginView']);

Route::get('/register', [UserController::class, 'registerView']);

Route::get('/auth/login', [UserController::class, 'loginAuth']);

Route::get('/auth/register', [RegisterController::class, 'authStepOne']);

Route::get('/auth/otp', [RegisterController::class, 'authStepTwo']);

Route::get('/auth/password', [RegisterController::class, 'authStepThree']);

Route::get('/home', [ProductController::class, 'index']);

Route::get('/detail/{id}', [ProductController::class, 'detail']);

Route::get('/ask/{id}', [ProductController::class, 'ask']);

Route::get('/ask/process/{id}', [ProductController::class, 'askProcess']);  

Route::get('/request/{id}', [ProductController::class, 'request']);

Route::get('/request/process/{id}', [ProductController::class, 'requestProcess']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/vendor', [VendorController::class, 'index']);

Route::get('/profile', [UserController::class, 'profile']);

Route::get('/vendor/accept/{id}', [VendorController::class, 'accept']);

Route::get('/vendor/reject/{id}', [VendorController::class, 'reject']);

Route::get('/vendor/complete/{id}', [VendorController::class, 'complete']);