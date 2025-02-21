<?php

use App\Http\Controllers\Doctor\AppointmentController;
use App\Http\Controllers\Doctor\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctor\AvailableTimeController;
use App\Http\Controllers\Doctor\profileController;

use App\Http\Controllers\Doctor\DashboardController;
Route::middleware(['doctor'])->prefix('doctor')->group(function () {
    Route::get('available-time', [AvailableTimeController::class, 'index'])->name('doctor.available-time.index');
    Route::get('available-time/create', [AvailableTimeController::class, 'create'])->name('doctor.available-time.create');
    Route::post('available-time', [AvailableTimeController::class, 'store'])->name('doctor.available-time.store');
    Route::get('available-time/{id}/edit', [AvailableTimeController::class, 'edit'])->name('doctor.available-time.edit');
    Route::put('available-time/{id}', [AvailableTimeController::class, 'update'])->name('doctor.available-time.update');
    Route::delete('available-time/{id}', [AvailableTimeController::class, 'destroy'])->name('doctor.available-time.destroy');
    Route::get('available-time/{id}/show', [AvailableTimeController::class, 'show'])->name('doctor.available-time.show');
});

Route::middleware(['doctor'])->prefix('doctor')->group(function () {
    Route::get('profile', [profileController::class, 'index'])->name('doctor.profile.index');
    Route::put('profile', [profileController::class, 'update'])->name('doctor.profile.update');
    Route::post('profile/image', [profileController::class, 'updateImage'])->name('doctor.profile.updateImage');
});

Route::middleware(['doctor'])->prefix('doctor')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('doctor.dashboard.index');

    Route::get('appointments/complated', [AppointmentController::class, 'allAppointments'])->name('doctor.appointments.all');
    Route::get('appointments/canceled', [AppointmentController::class, 'getAllcancelAppointment'])->name('doctor.appointments.canceled')
    ;
    Route::get('appointments/upcoming', [AppointmentController::class, 'getAllUpcomingAppointment'])->name('doctor.appointments.upcoming');
    Route::get('appointments/completed', [AppointmentController::class, 'getAllCompletedAppointment'])->name('doctor.appointments.completed');
    Route::post('/appointment/update-status', [AppointmentController::class, 'updateStatus'])->name('doctor.appointments.updateStatus');
    Route::delete('/appointment/{id}', [AppointmentController::class, 'destroy'])->name('doctor.appointments.destroy');
});
