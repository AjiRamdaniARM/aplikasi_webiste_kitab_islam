<?php

use App\Http\Controllers\admin\profileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


Route::get('/dashboard', function () {
    return view('components.admin.pages.dashboard');
})->name('dashboard');

// partial profile 
Route::get('/profile/edited/{username}', function() {
    $user = Auth::user();
    return view('components.admin.partials.profile.edited-profile', ['username' => $user->name]);
})->name('profile.edited');

Route::post('/profile/edited/{username}/post', [profileController::class , 'update'])->name('profile.edit.admin');
