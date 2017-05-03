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




// Main page
Route::get('/', 'AdminController@showAdminPage')->name('admin.main');

// Cars
Route::group(['prefix' => 'Cars', 'namespace' => 'Cars'], function () {
    Route::post('/getmodels', 'CarController@getmodels')->name('retrive.models');
    Route::get('/', 'CarController@index')->name('cars.all');
    Route::get('/export', 'CarController@export')->name('cars.export');
    Route::get('/insert', 'CarController@create')->name('cars.insert');
    Route::post('/store', 'CarController@store')->name('cars.store');
    // Car
    Route::group(['prefix' => '/{car}'], function () {
        Route::get('/', 'CarController@show')->name('cars.car.show');
        Route::get('/export', 'CarController@export')->name('cars.car.export');
        Route::get('/edit', 'CarController@edit')->name('cars.car.edit');
        Route::post('/update', 'CarController@update')->name('cars.car.update');
        Route::delete ('/delete', 'CarController@destroy')->name('cars.car.delete');
    });
});

// Car Models
Route::group(['prefix' => 'Models', 'namespace' => 'Cars'], function () {
    Route::get('/', 'CarModelController@index')->name('carmodels.all');
    Route::get('/export', 'CarModelController@export')->name('carmodels.export');
    Route::get('/insert', 'CarModelController@create')->name('carmodels.insert');
    Route::post('/store', 'CarModelController@store')->name('carmodels.store');
    // Car Model
    Route::group(['prefix' => '/{carModel}'], function () {
        Route::get('/', 'CarModelController@show')->name('carmodels.carmodel.show');
        Route::get('/export', 'CarModelController@export')->name('carmodels.carmodel.export');
        Route::get('/edit', 'CarModelController@edit')->name('carmodels.carmodel.edit');
        Route::post('/update', 'CarModelController@update')->name('carmodels.carmodel.update');
        Route::delete ('/delete', 'CarModelController@destroy')->name('carmodels.carmodel.delete');
    }); 
});

// Manufacturers
Route::group(['prefix' => 'Manufacturers', 'namespace' => 'Cars'], function () {
    Route::get('/', 'ManufacturerController@index')->name('manufacturers.all');
    Route::get('/export', 'ManufacturerController@export')->name('manufacturers.export');
    Route::get('/insert', 'ManufacturerController@create')->name('manufacturers.insert');
    Route::post('/store', 'ManufacturerController@store')->name('manufacturers.store');
    // Manufacturer
    Route::group(['prefix' => '/{manufacturer}'], function () {
        Route::get('/', 'ManufacturerController@show')->name('manufacturers.manufacturer.show');
        Route::get('/export', 'ManufacturerController@export')->name('manufacturers.manufacturer.export');
        Route::get('/edit', 'ManufacturerController@edit')->name('manufacturers.manufacturer.edit');
        Route::post('/update', 'ManufacturerController@update')->name('manufacturers.manufacturer.update');
        Route::delete ('/delete', 'ManufacturerController@destroy')->name('manufacturers.manufacturer.delete');
    }); 
});

// This needs to be here for some reason
Auth::routes();