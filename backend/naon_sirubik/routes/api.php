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
    
    Route::post('logout', 'API\RelAuthentication@logout');

    // Route::post('details', 'API\RelAuthentication@details');

    // info jadwal
    Route::post('infojadwal', 'API\InfoJadwal@get_all');
    Route::post('infojadwalsendiri', 'API\InfoJadwal@get_self');
    Route::post('infojadwallain', 'API\InfoJadwal@get_other');

    // info 
    Route::post('profileall', 'API\Profile@get_all');
    Route::post('profileorang', 'API\Profile@get_other');
    Route::post('profileedit', 'API\Profile@edit_profile');
    Route::post('profilesendiri', 'API\Profile@get_self');

    Route::post('editpassword', 'API\Profile@edit_password');


    // materi
    // Route::post('showmateri', 'API\Materi@get_all');
    // Route::post('showmateri', 'API\Materi@get_self');
    // Route::post('profilesendiri', 'API\Materi@get_self');
    // Route::post('profilesendiri', 'API\Materi@get_self');
    

});



