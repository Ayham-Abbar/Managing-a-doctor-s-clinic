<?php

use App\Http\Controllers\Accountant\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest:accountant'])->prefix('accountant')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('accountant.login');
    Route::post('login', [AuthController::class, 'loginAccountant'])->name('accountant.login');
    Route::get('register', [AuthController::class, 'register'])->name('accountant.register');
    Route::post('register', [AuthController::class, 'registerAccountant'])->name('accountant.register');
});

Route::middleware(['accountant'])->prefix('accountant')->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('accountant.logout');
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('accountant.dashboard');
});


