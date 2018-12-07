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

    // info jadwal
    Route::post('infojadwal', 'API\InfoJadwal@get_all');
    Route::post('infojadwalsendiri', 'API\InfoJadwal@get_self');
    Route::post('infojadwallain', 'API\InfoJadwal@get_other');

    // info 
    Route::post('profile', 'API\Profile@get_all');
    Route::post('profileorang', 'API\Profile@get_other');
    Route::post('editprofile', 'API\Profile@edit');
    Route::post('profilesendiri', 'API\Profile@get_self');

    // materi
    // Route::post('showmateri', 'API\Materi@get_all');
    // Route::post('showmateri', 'API\Materi@get_self');
    // Route::post('profilesendiri', 'API\Materi@get_self');
    // Route::post('profilesendiri', 'API\Materi@get_self');
    

});



