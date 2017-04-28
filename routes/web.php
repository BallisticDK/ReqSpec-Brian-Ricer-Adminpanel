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
Route::get('/admin','AdminController@showAdminPage')->name('index');

Route::delete ('/admin/{id}', 'UserController@destroy')->name('deleteUser');

Route::get('/edit/{id}', 'UserController@edit')->name('editUser');

Route::post('/update/{id}', 'UserController@update')->name('updateUser');

Route::get('/create', 'UserController@create')->name('createUser');

Route::post('/store', 'UserController@store')->name('storeUser');



// Cars

Route::get('/', 'Cars\CarController@index')->name('cars.all');

// Cars
Route::group(['prefix' => 'Cars', 'namespace' => 'Cars'], function () {
    Route::get('/', 'CarController@index')->name('cars.all');
    Route::get('/export', 'CarController@export')->name('cars.export');
    // Car
    Route::group(['prefix' => '/{car}'], function () {
        Route::get('/', 'CarController@show')->name('cars.car.show');
        Route::get('/export', 'CarController@export')->name('cars.car.export');
    });
});

// Car Models
Route::group(['prefix' => 'Models', 'namespace' => 'Cars'], function () {
    Route::get('/', 'CarModelController@index')->name('carmodels.all');
    Route::get('/export', 'CarModelController@export')->name('carmodels.export');
    // Car Model
    Route::group(['prefix' => '/{carModel}'], function () {
        Route::get('/', 'CarModelController@show')->name('carmodels.carmodel.show');
        Route::get('/export', 'CarModelController@export')->name('carmodels.carmodel.export');
    }); 
});

// Manufacturers
Route::group(['prefix' => 'Manufacturers', 'namespace' => 'Cars'], function () {
    Route::get('/', 'ManufacturerController@index')->name('manufacturers.all');
    Route::get('/export', 'ManufacturerController@export')->name('manufacturers.export');
    // Manufacturer
    Route::group(['prefix' => '/{manufacturer}'], function () {
        Route::get('/', 'ManufacturerController@show')->name('manufacturers.manufacturer.show');
        Route::get('/export', 'ManufacturerController@export')->name('manufacturers.manufacturer.export');
    }); 
});




Auth::routes();