<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/product/{product}/detail', 'detail')->name('product.detail');
    Route::post('/product/{product}/cart', 'add_cart')->name('product.cart');
    Route::get('/product/{product}/add_qty_cart', 'add_qty_cart')->name('product.add_qty_cart');
    Route::get('/product/{product}/min_qty_cart', 'min_qty_cart')->name('product.min_qty_cart');
    Route::get('/product/checkout', 'checkout')->name('product.checkout');
    Route::post('/product/order', 'order')->name('product.order');
});

require __DIR__ . '/admin.php';
require __DIR__ . '/auth.php';
