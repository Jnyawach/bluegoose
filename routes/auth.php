<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;

Route::group([], function (){
    Route::get('auth/register', [AuthController::class, 'register'])->name('register');
    Route::get('auth/login', [AuthController::class, 'login'])->name('login');
    Route::post('auth/store', [AuthController::class, 'store'])->name('store');
});

