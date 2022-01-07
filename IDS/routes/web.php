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

Route::get('/control_papan', 'scoreboardController@control_papan');
Route::get('/tampilan_papan', 'scoreboardController@tampilan_papan');
Route::get('update-sse','scoreboardController@update_sse');
//update-name
Route::post('store-home','scoreboardController@store_home');
Route::post('store-away','scoreboardController@store_away');
//update-skor-home
Route::post('store-homeplus2','ScoreboardController@scorehomeplus2');
Route::post('store-homeminus2','ScoreboardController@scorehomeminus2');
Route::post('store-homeplus3','ScoreboardController@scorehomeplus3');
Route::post('store-homeminus3','ScoreboardController@scorehomeminus3');
//update-skor-away
Route::post('store-awayplus2','ScoreboardController@scoreawayplus2');
Route::post('store-awayminus2','ScoreboardController@scoreawayminus2');
Route::post('store-awayplus3','ScoreboardController@scoreawayplus3');
Route::post('store-awayminus3','ScoreboardController@scoreawayminus3');
//get-skor-all
Route::get('get-score','ScoreboardController@get_score');
//reset-skor
Route::post('reset-skor-home','ScoreboardController@resetscorehome');
Route::post('reset-skor-away','ScoreboardController@resetscoreaway');
//fouls-home
Route::post('store-homefoulsplus1','ScoreboardController@homefoulsplus1');
Route::post('store-homefoulsminus1','ScoreboardController@homefoulsminus1');
//fouls-away
Route::post('store-awayfoulsplus1','ScoreboardController@awayfoulsplus1');
Route::post('store-awayfoulsminus1','ScoreboardController@awayfoulsminus1');
//reset-fouls
Route::post('reset-fouls-home','ScoreboardController@resetfoulshome');
Route::post('reset-fouls-away','ScoreboardController@resetfoulsaway');
//period
Route::post('store-plus1period','ScoreboardController@plus1period');
Route::post('store-minus1period','ScoreboardController@minus1period');
Route::post('reset-period','ScoreboardController@resetperiod');
//update-timer
Route::post('reset-menit-detik','scoreboardController@reset_menit_detik');
Route::post('resume-menit-detik','scoreboardController@resume_menit_detik');
Route::post('stop-menit-detik','scoreboardController@stop_menit_detik');
Route::post('update-menit-detik','ScoreboardController@update_menit_detik');
//update-sound
Route::post('store-sound1','ScoreboardController@store_sound1');
Route::post('store-sound2','ScoreboardController@store_sound2');
Route::post('store-sound3','ScoreboardController@store_sound3');
Route::post('update-sound','ScoreboardController@update_sound');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
