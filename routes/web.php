<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

Route::get('/', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginProcess'])->name('loginProcess');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/download/{filename}', [DashboardController::class, 'downloadFile'])->name('downloadFile');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
