<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/ask', function() {
    return view('ask');
});

Route::get('/request', function() {
    return view('request');
});