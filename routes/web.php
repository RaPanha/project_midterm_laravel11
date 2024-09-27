<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\AuthController::class, 'login'])->name('auth.page'); // Keep the login page as the home page
Route::post('/login', [App\Http\Controllers\AuthController::class, 'authenticateLogin'])->name('auth.login');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'authenticateRegister'])->name('auth.register');


Route::get('/product/index', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('/checkout', [App\Http\Controllers\AuthController::class, 'checkout'])->name('auth.checkout');
Route::get('/product/detail', [App\Http\Controllers\ProductController::class, 'detail'])->name('product.detail');
Route::get('/product/shop', [App\Http\Controllers\ProductController::class, 'shop'])->name('product.shop');

Route::get('/');
