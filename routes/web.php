<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalariosController;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::view('/', [LoginController::class, 'login'])->middleware('guest')->name('login');
Route::get('/login', [LoginController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.submit');
Route::post('/logout', Logout::class)->name('logout');

Route::view('/register', 'register')->middleware('guest')->name('register');
Route::post('/register', Register::class)->middleware('guest');

Route::get('/home', [HomeController::class, 'show'])->name('home')->middleware('auth.session');
Route::get('/salarios', [SalariosController::class, 'show'])->name('salarios')->middleware('auth.session');
