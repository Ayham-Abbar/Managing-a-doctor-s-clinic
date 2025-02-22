<?php

use App\Http\Controllers\Doctor\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest:doctor'])->prefix('doctor')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('doctor.login');
    Route::post('login', [AuthController::class, 'loginDoctor'])->name('doctor.login');
    Route::get('register', [AuthController::class, 'register'])->name('doctor.register');
    Route::post('register', [AuthController::class, 'registerDoctor'])->name('doctor.register');
});

Route::middleware(['doctor'])->prefix('doctor')->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('doctor.logout');
   // Route::get('dashboard', [AuthController::class, 'dashboard'])->name('doctor.dashboard');
});


