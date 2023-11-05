<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    // return view('welcome');
    return view('pages.auth.auth-login', ['type_menu' => '']);
});

Route::get('register', function () {
    return view('pages.auth.auth-register', ['type_menu' => 'auth']);
})->name('register');

Route::get('forgot-password', function () {
    return view('pages.auth.auth-forgot-password',  ['type_menu' => '']);
})->name('forgot-password');

Route::middleware(['auth'])->group(function () {

    Route::get('home', function () {
        return view('pages.app.dashboard-simpadu', ['type_menu' => '']);
    })->name('home');

    Route::post('logout', function () {
        Auth::logout();
        return redirect('/'); // Redirect ke halaman beranda atau halaman lain yang sesuai.
    })->name('logout');

    Route::get('reset-password', function () {
        return view('pages.auth.auth-reset-password', ['type_menu' => '']);
    })->name('reset-password');
});
