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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/signin', [LoginController::class,'store']);
Route::post('/login', [LoginController::class,'autenticete']);
Route::group(['prefix' => 'v1'
],function () {
Route::group([
    'prefix' => 'auth'
], function () {
    // Route::post('login', [LoginController::class,'autenticete']);
    Route::post('/signup', [LoginController::class,'store']);
  
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'LoginController@user');
    });
});});
