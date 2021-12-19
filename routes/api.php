<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::get('/home/{id_cidade?}', [\App\Http\Controllers\WebController::class, 'index']);

Route::group(['middleware' => 'apiJwt'], function(){
    Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout']); 
    Route::post('check', [\App\Http\Controllers\WebController::class, 'check']); 
    Route::get('dashboard', [\App\Http\Controllers\WebController::class, 'dashboard']);
});


//  Route::get('users', [\App\Http\Controllers\UserController::class, 'index']);
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
