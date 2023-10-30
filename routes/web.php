<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.blank-page', ['type_menu' => '']);
});

Route::get('/auth-login', function () {
    return view('pages.auth-login', ['type_menu' => 'auth']);
});

Route::get('/auth-register', function () {
    return view('pages.auth-register', ['type_menu' => 'auth']);
});
