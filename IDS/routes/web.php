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

Route::get('/auth/redirect', 'Auth\LoginController@redirectToProvider');
Route::get('/auth/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/', function () {
    return view('home');
});
route::view('/home','home');

route::get('/dataCustomer','customerController@indexDataCust');
route::get('/tambahCust1','customerController@tambahCustomer1');
route::get('/tambahCust2','customerController@tambahCustomer2');

Route::get('tambahCustomer/getcities/{id}','customerController@getCities');
Route::get('tambahCustomer/getdistricts/{id}','customerController@getDistricts');
Route::get('tambahCustomer/getsubdistricts/{id}','customerController@getSubdistricts');

Route::post('/tambahCustomer1/store1','customerController@store1');
Route::post('/tambahCustomer2/store2','customerController@store2');
Route::view('/customer/export', 'importExel');
Route::post('/customer/export-excel','customerController@importExcel');

route::get('/barang','barcodeController@indexBarang');
Route::view('/barcode', 'barcode');
route::get('/tambahLabel','barcodeController@indexTambahLabel');
Route::post('/tambahLabel/store','barcodeController@store');
// route::get('/cetakBarcode','barcodeController@cetakBarcode');
// Route::post('/cetakBarcode', 'barcodeController@cetakPdf' );
Route::get('/cetakBarcode/{id_barang}/{col}/{row}', 'barcodeController@cetakPdf');;

Route::get('/datatoko', 'tokoController@indextoko');
Route::get('/tambahtoko', 'tokoController@indextambah');
Route::post('tambahtoko/simpan/', 'tokoController@simpan');
Route::get('/scankunjungan', 'tokoController@indexkunjungan');
Route::post('/scankunjungan/getLocationToko', 'tokoController@getLocationToko');
// Route::post('/scan-kunjungan-toko/hasil',[scanBarcodeController::class,'getDistanceFromLatLonInKm']);
Route::get('/datatoko/cetak/{barcode}', 'tokoController@cetak');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
