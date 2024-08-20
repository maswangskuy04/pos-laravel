<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// routing login

Route::get('/', [LoginController::class, 'index']);
Route::resource('dashboard', DashboardController::class);
Route::resource('user', UserController::class);
Route::get('login', [LoginController::class, 'index']);

Route::post('action-login', [LoginController::class, 'actionLogin'])->name('action-login');
