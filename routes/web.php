<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', [UserController::class, 'loginProcess'])->name('loginProcess');

Route::get('/dashboard', function () {
    return view('dashboard');
});
