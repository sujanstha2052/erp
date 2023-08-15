<?php

use App\Http\Controllers\Company\DashboardController;
use App\Http\Controllers\Company\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::middleware(['auth', 'is-admin', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('users/datatable-data', [UserController::class, 'ajaxDatatable'])->name('users.datatable-data');
    Route::resource('users', UserController::class);
});
