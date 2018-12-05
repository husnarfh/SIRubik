<?php
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
Route::post('login', 'API\RelAuthentication@login');
// Route::post('register', 'API\RelAuthentication@register');
Route::group(['middleware' => 'auth:api'], function(){  
    Route::post('details', 'API\RelAuthentication@details');
    Route::post('infojadwal', 'API\InfoJadwal@get');
});



