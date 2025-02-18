<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Dashboard\DoctorManagementController;
use App\Http\Controllers\Admin\profileController;
Route::get('/doctor', [DoctorManagementController::class, 'create'])->name('doctor.create');
Route::get('/doctor/list', [DoctorManagementController::class, 'index'])->name('doctor.index');
Route::get('/profile', [DoctorManagementController::class, 'profile'])->name('profile');
Route::post('/doctor', [DoctorManagementController::class, 'store'])->name('doctor.store');
Route::put('/doctor/{id}', [DoctorManagementController::class, 'update'])->name('doctor.update');




Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::get('profile', [profileController::class, 'index'])->name('admin.profile.index');
    Route::put('profile', [profileController::class, 'update'])->name('admin.profile.update');
    Route::post('profile/image', [profileController::class, 'updateImage'])->name('admin.profile.updateImage');
});
