<?php

use App\Http\Controllers\Admin\Dashboard\AccountantManagementController;
use App\Http\Controllers\Admin\Dashboard\AppointmentController;
use App\Http\Controllers\Admin\Dashboard\AvailableTimeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Dashboard\DoctorManagementController;
use App\Http\Controllers\Admin\Dashboard\SpecializationManagementController;
use App\Http\Controllers\Admin\profileController;
use App\Http\Controllers\Admin\Dashboard\PatientManagementController;
//doctor
Route::get('/doctor', [DoctorManagementController::class, 'create'])->name('doctor.create');
Route::get('/doctor/list', [DoctorManagementController::class, 'index'])->name('doctor.index');
Route::get('/profile', [DoctorManagementController::class, 'profile'])->name('profile');
Route::post('/doctor', [DoctorManagementController::class, 'store'])->name('doctor.store');
Route::put('/doctor/{id}', [DoctorManagementController::class, 'update'])->name('doctor.update');
//profile
Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::get('profile', [profileController::class, 'index'])->name('admin.profile.index');
    Route::put('profile', [profileController::class, 'update'])->name('admin.profile.update');
    Route::post('profile/image', [profileController::class, 'updateImage'])->name('admin.profile.updateImage');
});
Route::get('/doctor/{id}/edit', [DoctorManagementController::class, 'edit'])->name('doctor.edit');
Route::delete('/doctor/{id}', [DoctorManagementController::class, 'destroy'])->name('doctor.destroy');
//specialization
Route::get('/specialization', [SpecializationManagementController::class, 'index'])->name('specialization.index');
Route::get('/specialization/create', [SpecializationManagementController::class, 'create'])->name('specialization.create');
Route::post('/specialization', [SpecializationManagementController::class, 'store'])->name('specialization.store');
Route::get('/specialization/{id}/edit', [SpecializationManagementController::class, 'edit'])->name('specialization.edit');
Route::put('/specialization/{id}',[SpecializationManagementController::class,'update'])->name('specialization.update');
Route::delete('/specialization/{id}', [SpecializationManagementController::class, 'destroy'])->name('specialization.destroy');
//Accountant
Route::get('/accountant',[AccountantManagementController::class,'index'])->name('accountant.index');
Route::get('/accountant/create',[AccountantManagementController::class,'create'])->name('accountant.create');
Route::post('/accountant',[AccountantManagementController::class,'store'])->name('accountant.store');
Route::get('/accountant/{id}/edit',[AccountantManagementController::class,'edit'])->name('accountant.edit');
Route::put('/accountant/{id}',[AccountantManagementController::class,'update'])->name('accountant.update');
Route::delete('/accountant/{id}',[AccountantManagementController::class,'destroy'])->name('accountant.destroy');
//Patient
Route::get('/patient',[PatientManagementController::class,'index'])->name('patient.index');
Route::get('/patient/create',[PatientManagementController::class,'create'])->name('patient.create');
Route::post('/patient',[PatientManagementController::class,'store'])->name('patient.store');
Route::get('/patient/{id}/edit',[PatientManagementController::class,'edit'])->name('patient.edit');
Route::put('/patient/{id}',[PatientManagementController::class,'update'])->name('patient.update');
Route::delete('/patient/{id}',[PatientManagementController::class,'destroy'])->name('patient.destroy');
//AvailableTime
Route::get('/available-time',[AvailableTimeController::class,'index'])->name('available-time.index');
Route::get('/available-time/create',[AvailableTimeController::class,'create'])->name('available-time.create');
Route::post('/available-time',[AvailableTimeController::class,'store'])->name('available-time.store');
Route::get('/available-time/{id}/edit',[AvailableTimeController::class,'edit'])->name('available-time.edit');
Route::put('/available-time/{id}',[AvailableTimeController::class,'update'])->name('available-time.update');
Route::delete('/available-time/{id}',[AvailableTimeController::class,'destroy'])->name('available-time.destroy');
//Appointment
Route::get('/appointments',[AppointmentController::class,'index'])->name('appointments.index');
Route::get('/appointments/upcoming',[AppointmentController::class,'upcoming'])->name('appointments.upcoming');
Route::get('/appointments/completed',[AppointmentController::class,'completed'])->name('appointments.completed');
Route::get('/appointments/canceled',[AppointmentController::class,'canceled'])->name('appointments.canceled');
Route::get('/appointments/clear-all',[AppointmentController::class,'clearAll'])->name('appointments.clearAll');