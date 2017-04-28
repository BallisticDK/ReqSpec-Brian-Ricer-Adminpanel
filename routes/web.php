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


Route::get('/admin','UserController@index')->name('index');;

Route::delete ('/admin/{id}', 'UserController@destroy')->name('deleteUser');

Route::get('/edit/{id}', 'UserController@edit')->name('editUser');

Route::post('/update/{id}', 'UserController@update')->name('updateUser');

Route::get('/create', 'UserController@create')->name('createUser');

Route::post('/store', 'UserController@store')->name('storeUser');


Auth::routes();

Route::get('/home', 'HomeController@index');
//Route::get('/home', 'HomeController@index');