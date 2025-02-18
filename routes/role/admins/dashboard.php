<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Dashboard\DoctorManagementController;

Route::get('/doctor', [DoctorManagementController::class, 'create'])->name('doctor.create');
Route::get('/doctor/list', [DoctorManagementController::class, 'index'])->name('doctor.index');
