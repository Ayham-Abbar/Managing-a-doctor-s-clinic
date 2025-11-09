<?php

use App\Http\Controllers\Doctor\AppointmentController;
use App\Http\Controllers\Doctor\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctor\AvailableTimeController;
use App\Http\Controllers\Doctor\profileController;
use App\Http\Controllers\Doctor\PateintManagmentController;
use App\Http\Controllers\Doctor\ProcedureController;

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

    Route::get(' appointments/Daily', [AppointmentController::class, 'allAppointmentsDaily'])->name('doctor.appointments.all');
    Route::get('appointments/canceled', [AppointmentController::class, 'getAllcancelAppointment'])->name('doctor.appointments.canceled')
    ;
    Route::get('appointments/upcoming', [AppointmentController::class, 'getAllUpcomingAppointment'])->name('doctor.appointments.upcoming');
    Route::get('appointments/completed', [AppointmentController::class, 'getAllCompletedAppointment'])->name('doctor.appointments.completed');
    Route::post('/appointment/update-status', [AppointmentController::class, 'updateStatus'])->name('doctor.appointments.updateStatus');
    Route::delete('/appointment/{id}', [AppointmentController::class, 'destroy'])->name('doctor.appointments.destroy');
});
Route::middleware(['doctor'])->prefix('doctor')->group(function () {
    Route::get('appointments/create', [AppointmentController::class, 'create'])->name('doctor.appointments.create');
    Route::get('patients/search', [AppointmentController::class, 'searchPatients'])->name('doctor.patients.search');
    Route::post('appointment/store', [AppointmentController::class, 'storeAppointment'])->name('doctor.appointments.store');


});

Route::middleware(['doctor'])->prefix('doctor')->group(function () {
    Route::get('patients/index', [PateintManagmentController::class, 'index'])->name('doctor.patients.index');
    Route::get('patients/create', [PateintManagmentController::class, 'create'])->name('doctor.patients.create');
    Route::post('patients/store', [PateintManagmentController::class, 'store'])->name('doctor.patients.store');
    Route::get('patients/{id}/edit', [PateintManagmentController::class, 'edit'])->name('doctor.patients.edit');
    Route::put('patients/{id}', [PateintManagmentController::class, 'update'])->name('doctor.patients.update');
    Route::delete('patients/{id}', [PateintManagmentController::class, 'destroy'])->name('doctor.patients.destroy');
});

Route::middleware(['doctor'])->prefix('doctor')->group(function () {
    Route::get('treatments/create/{id}', [App\Http\Controllers\Doctor\TreatmentController::class, 'crate'])->name('doctor.treatments.create');
    Route::post('treatments/store/{id}', [App\Http\Controllers\Doctor\TreatmentController::class, 'storeOrUpdateTreatment'])->name('doctor.treatments.storeOrUpdate');
    Route::delete('treatments/delete/{id}', [App\Http\Controllers\Doctor\TreatmentController::class, 'deleteTreatmentPlan'])->name('doctor.treatments.destroy');
});

Route::middleware(['doctor'])->prefix('doctor')->group(function () {
    Route::post('procedures/store/{id}', [ProcedureController::class, 'store'])->name('doctor.procedures.store');
    Route::delete('procedures/delete/{id}', [ProcedureController::class, 'destroy'])->name('doctor.procedures.destroy');
});

use Illuminate\Support\Facades\Auth;

Route::get('gurd', function () {
    if (Auth::guard('admin')->check()) {
        return 'Current guard: admin';
    } elseif (Auth::guard('doctor')->check()) {
        return 'Current guard: doctor';
    } elseif (Auth::guard('web')->check()) {
        return 'Current guard: user';
    } else {
        return 'No guard is currently authenticated';
    }
});

