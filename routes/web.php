<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('register');
});

Route::get('/home', function () {
    return view('home');
});