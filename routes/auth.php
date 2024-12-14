<?php

use App\Http\Controllers\authController\LoginController;
use Illuminate\Support\Facades\Route;



// === view route get === //
Route::get('/login', function () {
    return view('auth.index');
});

// === view route post === //
Route::post('/login/login-prosses', [LoginController::class, 'authenticate'])->name('login.authenticate');
