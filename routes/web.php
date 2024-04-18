<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/register', function () {
    return view('register');
});

// Route untuk menampilkan formulir pendaftaran
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

// Route untuk menyimpan data pendaftaran
Route::post('/register', [RegisterController::class, 'store']);

// Route untuk menampilkan halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

// Route untuk mengautentikasi pengguna
Route::post('/login', [LoginController::class, 'authenticate']);

// Route untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Auth::routes(['verify' => true]);





