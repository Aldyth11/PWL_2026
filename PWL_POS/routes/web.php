<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;


// 1. Halaman Home
Route::get('/', [HomeController::class, 'index']);

// 2. Halaman Products (Route Prefix)
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
});

// 3. Halaman User
Route::get('/user', [UserController::class, 'index']);

// 4. Halaman Penjualan
Route::get('/sales', [SalesController::class, 'index']);

// 5. Halaman Level
Route::get('/level', [LevelController::class, 'index']);

// 6. Halaman Kategori
Route::get('/kategori', [KategoriController::class, 'index']);

// 7. Halaman Tambah User
Route::get('/user/tambah', [UserController::class, 'tambah']);

// 8. Halaman Simpan Tambah User
Route::post('/user/tambah/simpan', [UserController::class, 'tambah_simpan']);

// 9. Halaman Ubah User
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);

// 10. Halaman Simpan Ubah User
Route::put('/user/ubah/simpan/{id}', [UserController::class, 'ubah_simpan']);

// 11. Halaman Hapus User
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);