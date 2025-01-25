<?php

use App\Http\Controllers\admin\KitabsController\KitabsController;
use App\Http\Controllers\admin\KitabsController\StatusController;
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

Route::get('/all-data/form-create/{id}', function ($id) {
    $status = StatusKitab::all();
    $contentKitab = ContentKitab::with('detailKitab', 'latinArabs','kitabHadits')->find($id);
    return view('components.admin.partials.all-data.form-component', ['status' => $status, 'contentKitab' => $contentKitab]);
})->name('all-data.form');

Route::post('/prosses/{id}',[KitabsController::class, 'post'])->name('form_create.post');
Route::post('/kitabPost/{id}',[KitabsController::class, 'hadistPost'])->name('hadist.post');
Route::post('/proccesing/added',[KitabsController::class, 'kitabsAdded'])->name('kitabs.post');


// partial controller kitabs
Route::get('/all-data/delete/{nama_kitabs}', [KitabsController::class , 'delete'])->name('all-data.kitabs.delete');

// controller status
Route::post('/postStatus', [StatusController::class, 'store'])->name('status.post');


// partial profile 
Route::get('/profile/edited/{username}', function() {
    $user = Auth::user();
    return view('components.admin.partials.profile.edited-profile', ['username' => $user->name]);
})->name('profile.edited');

Route::post('/profile/edited/{username}/post', [profileController::class , 'update'])->name('profile.edit.admin');
