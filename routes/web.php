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

Route::get('/home', function () {
    return view('home');
});

Route::get('contoh','ContohController@index');

Route::get('/dokter', 'DokterController@index');
Route::post('/dokter/create','DokterController@create');
Route::get('/dokter/{id_dokter}/edit', 'DokterController@edit');
Route::post('/dokter/{id_dokter}/update', 'DokterController@update');
Route::get('/dokter/{id_dokter}/delete', 'DokterController@delete');

Route::get('/pasien', 'PasienController@index');
Route::post('/pasien/create','PasienController@create');
Route::get('/pasien/{id_pasien}/edit', 'PasienController@edit');
Route::post('/pasien/{id_pasien}/update', 'PasienController@update');
Route::get('/pasien/{id_pasien}/delete', 'PasienController@delete');

Route::get('/petugas', 'PetugasController@index');
Route::post('/petugas/create','PetugasController@create');
Route::get('/petugas/{id_petugas}/edit', 'PetugasController@edit');
Route::post('/petugas/{id_petugas}/update', 'PetugasController@update');
Route::get('/petugas/{id_petugas}/delete', 'PetugasController@delete');

Route::get('/obat', 'ObatController@index');
Route::post('/obat/create','ObatController@create');
Route::get('/obat/{id_obat}/edit', 'ObatController@edit');
Route::post('/obat/{id_obat}/update', 'ObatController@update');
Route::get('/obat/{id_obat}/delete', 'ObatController@delete');
 
Route::get('/rekammedis', 'RekamMedisController@index');
Route::post('/rekammedis/create','RekamMedisController@create');
Route::get('/rekammedis/{id_rekammedis}/edit', 'RekamMedisController@edit');
Route::get('/rekammedis/{id_rekammedis}/show', 'RekamMedisController@show');
Route::post('/rekammedis/{id_rekammedis}/update', 'RekamMedisController@update');
Route::get('/rekammedis/{id_rekammedis}/delete', 'RekamMedisController@delete');
Route::get('/rekammedis/downloadPDF/{id_rekammedis}','RekamMedisController@downloadPDF');

Route::get('/resepobat', 'ResepObatController@index');
Route::post('/resepobat/create','ResepObatController@create');
Route::get('/resepobat/{id_resep}/edit', 'ResepObatController@edit');
Route::post('/resepobat/{id_resep}/update', 'ResepObatController@update');
Route::get('/resepobat/{id_resep}/delete', 'ResepObatController@delete');
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	Route::resource('/users', 'UsersController', ['except'=>['show','create','store']]);
});
