<?php

use App\Http\Controllers\Api\V1\Auth\LoginController;
use App\Http\Controllers\Api\V1\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {

    Route::prefix('auth')->group(function () {
        Route::post('register', [RegisterController::class, '__invoke'])->name('auth.register');
        Route::post('login', [LoginController::class, '__invoke'])->name('auth.login');
    });

});
