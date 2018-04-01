<?php

use Illuminate\Http\Request;

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

Route::name('api.')->namespace('Api')->group(function () {
    Route::name('open.')->namespace('Open')->prefix('public')->group(function () {
        Route::get('message', 'MessageController@index')->name('message.index');
        Route::get('message/{id}/update', 'MessageController@update')->name('message.update');
        Route::get('message/list', 'MessageController@list')->name('message.list');

        /* Route::name('projects.')->group(function () {
             // Route::get('mirrors', 'MirrorsController@index')->name('index');
             Route::get('projects/{id}/mirrors', 'ProjectsController@showMirrors')->name('mirrors.show');
             // Route::get('mirrors/create', 'MirrorsController@create')->name('create');
             // Route::post('mirrors', 'MirrorsController@store')->name('store');
             // Route::get('mirrors/{id}', 'MirrorsController@show')->name('show');
             // Route::get('mirrors/{id}/edit', 'MirrorsController@edit')->name('edit');
             // Route::put('mirrors/{id}', 'MirrorsController@update')->name('update');
             // Route::delete('mirrors/{id}', 'MirrorsController@destroy')->name('destroy');
         });

         Route::name('statistics.')->namespace('Statistics')->prefix('statistics')->group(function () {
             Route::name('mirrors.')->group(function () {
                 Route::post('mirrors', 'MirrorsController@store')->name('store');
             });
         });*/
    });
});