<?php

use App\Http\Controllers\Auth\LoginUserController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\crud\UserDashboardController;
use App\Http\Controllers\crud\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('crud.index');
});

Route::prefix('/auth')->group(function () {
    Route::get('/login', [LoginUserController::class, 'index'])->name('login');
    Route::post('/login', [LoginUserController::class, 'store']);
    Route::post('/auth/logout', [LogoutController::class, 'logout'])->name('logout');
    Route::get('/register', [RegisterUserController::class, 'index'])->name('register');
    Route::post('/register', [RegisterUserController::class, 'store']);
});


Route::middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('dashboard');
        Route::get('create', [ProductController::class, 'create'])->name('create');
        Route::post('create', [ProductController::class, 'store'])->name('store');
        Route::get('product', [ProductController::class, 'products'])->name('product');
        Route::get('product/{product}/show', [ProductController::class, 'show'])->name('show');
        Route::get('product/{product}', [ProductController::class, 'edit'])->name('edit');
        Route::post('product/{product}/update', [ProductController::class, 'update'])->name('update');
        Route::delete('product/{product}/delete', [ProductController::class, 'destroy'])->name('delete');
    });
});