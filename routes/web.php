<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/ask', function () {
    return view('ask');
});

Route::get('/request', function () {
    return view('request');
});