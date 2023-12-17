<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('pages.Admin.index');
    })->name('home');
});
