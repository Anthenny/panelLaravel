<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\StaffController;
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

// staff
Route::get('/staff', [StaffController::class, 'index'])->name('staff');
Route::post('/staff', [StaffController::class, 'store'])->name('make_staff');
Route::get('/editstaff/{id}', [StaffController::class, 'edit'])->name('editstaff');
Route::put('/user/{id}', [StaffController::class, 'update'])->name('updatestaff');
Route::delete('/delete/{user}', [StaffController::class, 'destroy'])->name('deletestaff');

// leveringen
Route::get('/delivery', [DeliveryController::class, 'index'])->name('delivery');
Route::post('/delivery', [DeliveryController::class, 'store'])->name('make_delivery');
Route::get('/editdelivery/{id}', [DeliveryController::class, 'edit'])->name('editdelivery');
Route::put('/delivery/{id}', [DeliveryController::class, 'update'])->name('updatedelivery');
Route::delete('/delete/{delivery}', [DeliveryController::class, 'destroy'])->name('deletedelivery');
// home
Route::get('/', function () {
    return view('home');
})->name('home');