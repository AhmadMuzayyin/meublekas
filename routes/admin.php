<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilTokoController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/', 'index')->name('home');
    });
    Route::controller(KategoriController::class)->as('kategori.')->group(function () {
        Route::get('/kategori', 'index')->name('index');
        Route::post('/kategori/{category}/update', 'update')->name('update');
        Route::post('/kategori', 'store')->name('store');
        Route::delete('/kategori/{category}', 'destroy')->name('destroy');
    });
    Route::controller(ProdukController::class)->as('produk.')->group(function () {
        Route::get('/produk', 'index')->name('index');
        Route::post('/produk/{product}/update', 'update')->name('update');
        Route::post('/produk', 'store')->name('store');
        Route::delete('/produk/{product}/destroy', 'destroy')->name('destroy');
    });
    Route::controller(ProfilTokoController::class)->as('profil.')->group(function () {
        Route::get('/profil', 'index')->name('index');
        Route::post('/profil/update', 'update')->name('update');
    });
});
