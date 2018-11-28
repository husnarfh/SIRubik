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
Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/admin/relawan', 'HomeController@index')->name('home');
Route::get('/admin/relawan/form', 'HomeController@input_relawan')->name('home');

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/admin/matpel', 'HomeController@index')->name('home');
Route::get('/admin/matpel/form', 'HomeController@index')->name('home');

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/admin/event', 'HomeController@index')->name('home');
Route::get('/admin/event/form', 'HomeController@index')->name('home');
