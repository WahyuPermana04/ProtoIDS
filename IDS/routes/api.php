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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('books', 'API\bookController@index');
// Route::get('books/{id}', 'API\bookController@show');
Route::resource('books', 'API\bookController');
// Route::post('books', 'API\bookController@store');
// Route::put('books/{id}', 'API\bookController@update');
Route::resource('mobiles', 'API\MobileController');
