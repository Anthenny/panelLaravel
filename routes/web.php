<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;



// register
Route::get('/register', [RegisterController::class, 'index']) ->name('register');
Route::post('/register', [RegisterController::class, 'store']) ->name('register');

// login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login');

// logout
Route::post('logout', [LogoutController::class, 'store'])->name('logout');

// dashboard
Route::get('/dashboard', function() {
    return view('beheerder.dashboard');
})->name('dashboard');

// home
Route::get('/', function () {
    return view('home');
})->name('home');