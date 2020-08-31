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

Route::get('/customers', 'CustomersController@show');
Route::post('/customers', 'CustomersController@store');

Route::get('/orders', 'OrdersController@show');
Route::get('/orders/{id}', 'OrdersController@detail');
Route::post('/orders', 'OrdersController@store');

Route::get('/product', 'ProductController@show');
Route::post('/product', 'ProductController@store');

Route::get('/transaksi', 'TransaksiController@show');
Route::get('/transaksi/{id}', 'TransaksiController@detail');
Route::post('/transaksi', 'TransaksiController@store');