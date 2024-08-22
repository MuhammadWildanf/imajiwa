<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordResetController; 

//ADMIN
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => ['guest']], function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticated'])->name('login.process');

    //Forgot password
    Route::get('/forgot_password', [PasswordResetController::class, 'showForgetPasswordForm'])->name('forgot.password.get');
    Route::post('/forgot_password', [PasswordResetController::class, 'submitForgetPasswordForm'])->name('forgot.password.post');
    Route::get('/reset-password/{token}', [PasswordResetController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('/reset-password', [PasswordResetController::class, 'submitResetPasswordForm'])->name('reset.password.post');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Route Admin
Route::group(['middleware' => ['role:administrator', 'auth'], 'prefix' => 'admin'], function () {

    // Dashboard Route
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('administrator.dashboard');

    // Position Routes
    Route::get('/positions', [PositionController::class, 'index'])->name('positions');
    Route::post('/positions', [PositionController::class, 'store'])->name('positions.store');
    Route::get('/positions/create', [PositionController::class, 'create'])->name('positions.create');
    Route::get('/positions/edit/{id}', [PositionController::class, 'edit'])->name('positions.edit');
    Route::put('/positions/edit/{id}', [PositionController::class, 'update'])->name('positions.update');
    Route::delete('/positions/delete/{id}', [PositionController::class, 'destroy'])->name('positions.delete');
    Route::post('/positions/datatable', [PositionController::class, 'datatable'])->name('positions.datatable');

    // Users Route
    Route::get('/pegawai', [UserSettingController::class, 'index'])->name('pegawai');
    Route::post('/pegawai', [UserSettingController::class, 'store'])->name('pegawai.store');
    Route::get('/pegawai/create', [UserSettingController::class, 'create'])->name('pegawai.create');
    Route::get('/pegawai/edit/{id}', [UserSettingController::class, 'edit'])->name('pegawai.edit');
    Route::put('/pegawai/edit/{id}', [UserSettingController::class, 'update'])->name('pegawai.update');
    Route::delete('/pegawai/delete/{id}', [UserSettingController::class, 'destroy'])->name('pegawai.delete');
    Route::post('/pegawai/datatable', [UserSettingController::class, 'datatable'])->name('pegawai.datatable');

    // Employee Ruote
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employees');
    Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
    Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::get('/employees/edit/{id}', [EmployeeController::class, 'edit'])->name('employees.edit');
    Route::put('/employees/edit/{id}', [EmployeeController::class, 'update'])->name('employees.update');
    Route::delete('/employees/delete/{id}', [EmployeeController::class, 'destroy'])->name('employees.delete');
    Route::post('/employees/datatable', [EmployeeController::class, 'datatable'])->name('employees.datatable');

    
});
