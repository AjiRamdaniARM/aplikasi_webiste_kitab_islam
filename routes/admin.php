<?php

use App\Http\Controllers\admin\KitabsController\KitabsController;
use App\Http\Controllers\admin\profileController;
use App\Models\ContentKitab;
use App\Models\IslamiKitab;
use App\Models\StatusKitab;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


Route::get('/dashboard', function () {
    $get_count_kitab = IslamiKitab::count();
    return view('components.admin.pages.dashboard' , ['count_kitabs' => $get_count_kitab]);
})->name('dashboard');

Route::get('/all-data', function () {
    $getKitabs = ContentKitab::with('islamiKitab')->get();
    return view('components.admin.pages.all-data', ['kitabs' => $getKitabs]);
})->name('all-data');

Route::get('/all-data/form-create', function () {
    $status = StatusKitab::all();
    return view('components.admin.partials.all-data.form-component', ['status' => $status]);
})->name('all-data.form');


// partial controller kitabs
Route::get('/all-data/delete/{nama_kitabs}', [KitabsController::class , 'delete'])->name('all-data.kitabs.delete');


// partial profile 
Route::get('/profile/edited/{username}', function() {
    $user = Auth::user();
    return view('components.admin.partials.profile.edited-profile', ['username' => $user->name]);
})->name('profile.edited');

Route::post('/profile/edited/{username}/post', [profileController::class , 'update'])->name('profile.edit.admin');
