<?php

use Illuminate\Support\Facades\Route;

Route::get('login', function () {
    echo "Login";
})->name('login');
