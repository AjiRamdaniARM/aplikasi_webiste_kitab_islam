<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/change-language/{lang}', function ($lang) {
    // Cek apakah bahasa yang dipilih tersedia
    if (in_array($lang, ['en', 'ms'])) {
        Session::put('locale', $lang);
    }
    return Redirect::back();
})->name('change.language');


require_once __DIR__.'/auth.php';