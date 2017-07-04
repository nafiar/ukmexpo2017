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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'UserController@index');
Route::get('/home', 'UserController@index');
Route::get('/login', 'AuthController@login');
Route::post('/login', 'AuthController@doLogin');
Route::get('/logout', 'AuthController@logout');
//Route::get('/daftarukm', 'FrontendController@daftarUkm');
Route::get('/carinrp', 'UserController@carinrp');
Route::post('/carinrp', 'UserController@doPencarian');
Route::get('/daftaranggota', 'UserController@daftarAnggotaUkm');
Route::get('/daftarukm', 'UserController@daftarUkm');
Route::get('/pengumumanukm', 'UserController@pengumumanUkm');
Route::get('/profilukm/{id_ukm}', 'UserController@profilUkm');

Route::group(['middleware' => ['Authentikasi']], function(){
	Route::get('/admin/pendaftaran/profilpendaftar/{id}', 'AdminPendaftaranController@profilPendaftar');
	Route::get('/admin/pendaftaran/terima/{id}', 'AdminPendaftaranController@terimaPendaftaran');
	Route::get('/admin/pendaftaran/diterima', 'AdminPendaftaranController@pendaftarDiterima');
	Route::get('/admin/dashboard', 'AuthController@dashboard');
	Route::resource('/admin/daftaranggota', 'AdminDaftarAnggotaController');
	Route::resource('/admin/profilukm', 'AdminProfilUkmController');
	Route::resource('/admin/pendaftaran', 'AdminPendaftaranController');
	Route::resource('/admin/pengumumanukm', 'AdminPengumumanUkmController');
});