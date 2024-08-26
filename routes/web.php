<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// routing login
Route::get('/', [LoginController::class, 'index']);
Route::get('login', [LoginController::class, 'index']);
Route::post('action-login', [LoginController::class, 'actionLogin'])->name('action-login');

// routing segala nya
Route::resource('dashboard', DashboardController::class);
Route::resource('user', UserController::class);
Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);
Route::resource('penjualan', TransactionController::class);


Route::get('get-products/{category_id}', [TransactionController::class, 'getProducts']);
Route::get('get-product/{product_id}', [TransactionController::class, 'getProduct']);
