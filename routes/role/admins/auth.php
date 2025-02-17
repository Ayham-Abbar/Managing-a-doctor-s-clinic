<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest:admin'])->prefix('admin')->group(function () {
    Route::get('login', [AuthController::class, 'login']);
    Route::post('login', [AuthController::class, 'loginAdmin'])->name('admin.login');
    Route::get('register', [AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'registerAdmin'])->name('admin.register');
});

Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');
});


