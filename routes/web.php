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

Route::get('/', function () {
    return view('welcome');
});

Route::get('contoh','ContohController@index');

Route::get('/dokter', 'DokterController@index');
Route::post('dokter/create','DokterController@create');
Route::get('/dokter/{id_dokter}/edit', 'DokterController@edit');
Route::post('/dokter/{id_dokter}/update', 'DokterController@update');
Route::get('/dokter/{id_dokter}/delete', 'DokterController@delete');