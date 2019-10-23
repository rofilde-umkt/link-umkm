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
Route::get("/users",
'UserController@index')->name("user.index");

Route::get("/users/create",
'UserController@create')->name("user.create");

Route::post("/users",
'UserController@store')->name("user.store");

Route::get("/users/{id}/edit",
'UserController@edit')->name("user.edit");

Route::post("/users/{id}",
'UserController@update')->name("user.update");

Route::get("/users/{id}/delete",
'UserController@delete')->name("user.delete");



Route::get("/toko",
'TokoController@index')->name("toko.index");

Route::get("/toko/create",
'TokoController@create')->name("toko.create");

Route::post("/toko",
'TokoController@store')->name("toko.store");

Route::get("/toko/{id}/edit",
'TokoController@edit')->name("toko.edit");

Route::post("/toko/{id}",
'TokoController@update')->name("toko.update");

Route::get("/toko/{id}/delete",
'TokoController@delete')->name("toko.delete");



Route::get("/barang",
'BarangController@index')->name("barang.index");

Route::get("/barang/create",
'BarangController@create')->name("barang.create");

Route::post("/barang",
'BarangController@store')->name("barang.store");

Route::get("/barang/{id}/edit",
'BarangController@edit')->name("barang.edit");

Route::post("/barang/{id}",
'BarangController@update')->name("barang.update");

Route::get("/barang/{id}/delete",
'BarangController@delete')->name("barang.delete");



Route::get('/login',
'SecurityController@login')->name('login');

Route::post('/login','SecurityController@prosesLogin')->name('login.proses');

Route::get('/logout',
'SecurityController@logout')->name('login');

Route::get('/logout', 'SecurityController@logout');

