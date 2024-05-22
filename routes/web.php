<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\RewardController;

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

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('/index', [HomeController::class, 'index'])->name('index')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::post('/add-to-cart', [CartController::class, 'addToCart'])->middleware('auth');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');

Route::post('/upload-photo', [RewardController::class, 'uploadPhoto'])->name('upload.photo');
