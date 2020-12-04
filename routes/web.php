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

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');


Route::get('/dashboard','DashboardController@index')->middleware('auth','checkRole:admin,kasir,manager');

Route::get('/barang','BarangController@index')->middleware('auth','checkRole:admin');
Route::post('/barang/create','BarangController@create');
Route::get('/barang/{id}/edit','BarangController@edit');
Route::post('/barang/{id}/update','BarangController@update');
Route::get('/barang/{id}/delete','BarangController@delete');

Route::get('/merek','MerekController@index')->middleware('auth','checkRole:admin');
Route::post('/merek/create','MerekController@create');
Route::get('/merek/{id}/edit','MerekController@edit');
Route::post('/merek/{id}/update','MerekController@update');
Route::get('/merek/{id}/delete','MerekController@delete');

Route::get('/distributor','DistributorController@index')->middleware('auth','checkRole:admin');
Route::post('/distributor/create','DistributorController@create');
Route::get('/distributor/{id}/edit','DistributorController@edit');
Route::post('/distributor/{id}/update','DistributorController@update');
Route::get('/distributor/{id}/delete','DistributorController@delete');

Route::get('/transaksi','TransaksiController@index')->middleware('auth','checkRole:kasir');
Route::post('/transaksi/create','TransaksiController@create');
Route::get('/transaksi/{id}/edit','TransaksiController@edit');
Route::post('/transaksi/{id}/update','TransaksiController@update');
Route::get('/transaksi/{id}/delete','TransaksiController@delete');

Route::get('/user','UserController@index')->middleware('auth','checkRole:admin');
Route::post('/user/create','UserController@create');
Route::get('/user/{id}/edit','UserController@edit');
Route::post('/user/{id}/update','UserController@update');
Route::get('/user/{id}/delete','UserController@delete');

Route::get('/laporanbarang','LaporanbarangController@index')->middleware('auth','checkRole:manager');
Route::get('/cetakbarang','CetakbarangController@index')->middleware('auth','checkRole:manager');
Route::get('/laporanbarang/periode','LaporanbarangController@periode')->middleware('auth','checkRole:manager');

Route::get('/laporantransaksi','LaporantransaksiController@index')->middleware('auth','checkRole:manager');
Route::get('/cetaktransaksi','LaporantransaksiController@cetak')->middleware('auth','checkRole:manager');
Route::get('/laporantransaksi/periode','LaporantransaksiController@periode')->middleware('auth','checkRole:manager');