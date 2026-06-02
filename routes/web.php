<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\SalariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

Route::get('/inicio', [InicioController::class, 'show'])->name('inicio')->middleware('auth.session');
Route::get('/salarios', [SalariosController::class, 'show'])->name('salarios')->middleware('auth.session');
