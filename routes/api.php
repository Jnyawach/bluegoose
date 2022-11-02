<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesapalController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([],function (){
    Route::get('access/token', [PesapalController::class,'accessToken']);
    Route::get('get/ipn', [PesapalController::class,'getRegisteredIpn']);
    Route::get('register/ipn', [PesapalController::class,'registerIpn']);
    Route::get('submit/order', [PesapalController::class,'submitOrderRequest']);
    Route::get('order/status', [PesapalController::class,'orderStatus']);
});
