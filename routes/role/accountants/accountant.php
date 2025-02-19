<?php


use App\Http\Controllers\Accountant\profileController;
use Illuminate\Support\Facades\Route;



Route::middleware(['accountant'])->prefix('accountant')->group(function () {
    Route::get('profile', [profileController::class, 'index'])->name('accountant.profile.index');
    Route::put('profile', [profileController::class, 'update'])->name('accountant.profile.update');
    Route::post('profile/image', [profileController::class, 'updateImage'])->name('accountant.profile.updateImage');
});
