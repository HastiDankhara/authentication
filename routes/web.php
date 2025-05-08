<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Show the login and register pages (GET)
Route::get('register', function () {
    return view('register');
})->name('register');

Route::get('login', function () {
    return view('login');
})->name('login');

// Handle form submissions (POST)
Route::post('register', [UserController::class, 'register'])->name('register.store');
Route::post('login', [UserController::class, 'login'])->name('login.store');

// Protected dashboard
Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');

// Logout route
Route::get('/logout', [UserController::class, 'logout'])->name('logout');