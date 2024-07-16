<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [CustomAuthController::class, 'home'])->name('home')->middleware('auth');
Route::get('/Registro', [CustomAuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/Registro', [CustomAuthController::class, 'register'])->name('register');

Route::get('/login', [CustomAuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [CustomAuthController::class, 'login'])->name('login');
Route::post('/logout', [CustomAuthController::class, 'logout'])->name('logout');



