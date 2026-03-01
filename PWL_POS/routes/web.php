<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\LevelController;

// 1. Halaman Home
Route::get('/', [HomeController::class, 'index']);

// 2. Halaman Products (Route Prefix)
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
});

// 3. Halaman User (Route Param)
Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);

// 4. Halaman Penjualan
Route::get('/sales', [SalesController::class, 'index']);

// 5. Halaman Level
Route::get('/level', [LevelController::class, 'index']);