<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
<<<<<<< Updated upstream
    return redirect('/login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
=======
    return view('landing');
>>>>>>> Stashed changes
});

Route::get('/home', function () {
    return view('home');
});