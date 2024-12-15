<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


// === route home page === //
Route::get('/', function () {
    return view('index');
})->name(('home.page'));

// === route info page === //
Route::get('/info', function () {
    return view('components.pages.page-info.index');
})->name(('info.page'));

// === route infaq page === //
Route::get('/infaq', function () {
    return view('components.pages.page-infaq.index');
})->name(('infaq.page'));


// === route ilmu hadis page === //
Route::get('/ilmu-hadis', function () {
    return view('components.pages.page-ilmuHadis.index');
})->name(('ilmu-hadis.page'));


// === route language === //
Route::get('/change-language/{lang}', function ($lang) {
    // === Cek apakah bahasa yang dipilih tersedia === //
    if (in_array($lang, ['en', 'ms'])) {
        Session::put('locale', $lang);
    }
    return Redirect::back();
})->name('change.language');


require_once __DIR__.'/auth.php';
require_once __DIR__.'/admin.php';