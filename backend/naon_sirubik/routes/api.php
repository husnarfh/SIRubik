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
    
    Route::get('logout', 'API\RelAuthentication@logout');

    // Route::post('details', 'API\RelAuthentication@details');

    // info jadwal
    Route::get('infojadwal', 'API\InfoJadwal@get_all');
    Route::get('infojadwalsendiri', 'API\InfoJadwal@get_self');
    Route::post('infojadwallain', 'API\InfoJadwal@get_other');

    // info 
    Route::get('profileall', 'API\Profile@get_all');
    Route::post('profileorang', 'API\Profile@get_other');
    Route::post('profileedit', 'API\Profile@edit_profile');
    Route::get('profilesendiri', 'API\Profile@get_self');

    Route::post('uploadimage', 'API\Profile@photo_uploader');
    

    // belom
    Route::post('editpassword', 'API\Profile@edit_password');


    // materi
    
    Route::post('materishow', 'API\MateriController@get');
    Route::post('materishowselect', 'API\MateriController@getkelasmapel');
    Route::post('materiupload', 'API\MateriController@upload');
    Route::post('uploadfile', 'API\MateriController@uploadfile');
    Route::post('materidelete', 'API\MateriController@delete');


    // chat
    Route::get('dialog', 'API\PesanController@dialog');
    Route::post('retrieve', 'API\PesanController@retrieve');
    Route::post('send', 'API\PesanController@send');
    

});



