<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/catering', function () {
    return view('catering');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/reward', function () {
    return view('reward');
});

Route::get('/review', function () {
    return view('review');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
