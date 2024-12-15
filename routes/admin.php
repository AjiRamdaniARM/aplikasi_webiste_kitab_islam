<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


Route::get('/dashboard', function () {
    return view('components.admin.pages.dashboard');
})->name('dashboard');
