<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\pelanggarancontroller;


Route::get('/', function () {
    return view('auth/login');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [LoginRegisterController::class, 'register'])->name('register');
    Route::post('/store', [LoginRegisterController::class, 'store'])->name('store');
    Route::get('/login', [LoginRegisterController::class, 'login'])->name('login');
    Route::post('/authenticate', [LoginRegisterController::class, 'authenticate'])->name('authenticate');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin/dashboard');
    Route::resource('/admin/siswa', SiswaController::class);
    Route::resource('/admin/pelanggaran', pelanggaranController::class);
    Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
});



