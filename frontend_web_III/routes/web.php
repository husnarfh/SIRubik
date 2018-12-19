<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();


Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

// admin functionality
Route::get('/admin/relawan/indeks', 'HomeController@indeks_relawan')->name('indeks_relawan');
Route::get('/admin/relawan/form', 'HomeController@input_relawan')->name('form');
Route::get('/admin/relawan/kalender', 'HomeController@kalender_pengajaran')->name('kalender_pengajaran');
Route::get('/admin/relawan/calon', 'HomeController@calon_relawan')->name('calon_relawan');
Route::post('/admin/inputrelawan', 'HomeController@add_relawan')->name('inputrelawan');

Route::get('/admin/matpel/kelas1', 'HomeController@kelas1')->name('home');

Route::get('/admin/matpel/form', 'HomeController@matpel_form')->name('matpel_form');

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/admin/event', 'HomeController@index')->name('home');
Route::get('/admin/event/form', 'HomeController@index')->name('home');


// // Relawan functionalty
// Route::post('/authentication', 'Authentication@login');
// Route::get('/authentication', 'Authentication@login');
