<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::get('/login','AuthController@login')->name('login');
Route::get('/logout','AuthController@logout');
Route::post('/postlogin','AuthController@postlogin');

Route::get('/ruma', 'HomeController@index')->name('home');
Route::get('/home', 'UtamaController@home');
Route::get('/katalog','UtamaController@katalog')->name('katalog');

Route::get('/cc','AdminController@cc');


Route::group(['middleware' => 'auth'],function()
{
	Route::get('/admin','AdminController@awal');
Route::get('/editkatalog','AdminController@katalog');

Route::post('/shopee/{id}/update','AdminController@editshopee');
Route::post('/namatoko/{id}/update','AdminController@namatoko');
Route::post('/wa/{id}/update','AdminController@wa');
Route::post('/deskripsi/{id}/update','AdminController@deskripsi');
Route::post('/logo/{id}/update','AdminController@editlogo');
Route::post('/log/{id}/update','AdminController@editlogo');

Route::get('/barang/{id}/update','AdminController@katalogbarang');
Route::post('/barangjadi/{id}/update','AdminController@barangjadi');
Route::get('/katalogbaru','AdminController@buat');
Route::post('/barang/create','AdminController@buatbarang');
Route::get('/barang/{id}','AdminController@hapusbarang');
});



