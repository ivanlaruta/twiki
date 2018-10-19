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

Route::get('/', 'WikiController@inicio')->name('inicio');
Route::get('modal_descarga', 'WikiController@modal_descarga')->name('modal_descarga');

Route::get('/icons', function () {
    return view('icons');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
