<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Dashboard\DoctorManagementController;

Route::get('/doctor', [DoctorManagementController::class, 'create'])->name('doctor.create');
Route::get('/doctor/list', [DoctorManagementController::class, 'index'])->name('doctor.index');
Route::get('/profile', [DoctorManagementController::class, 'profile'])->name('profile');
Route::post('/doctor', [DoctorManagementController::class, 'store'])->name('doctor.store');
Route::put('/doctor/{id}', [DoctorManagementController::class, 'update'])->name('doctor.update');
Route::get('/doctor/{id}/edit', [DoctorManagementController::class, 'edit'])->name('doctor.edit');
Route::delete('/doctor/{id}', [DoctorManagementController::class, 'destroy'])->name('doctor.destroy');
