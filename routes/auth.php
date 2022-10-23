<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;

Route::group([], function (){
    Route::get('auth/register', [AuthController::class, 'register'])->name('register');
});

