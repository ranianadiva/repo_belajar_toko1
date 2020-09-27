<?php

use Illuminate\Http\Request;

Route::post('/register', 'UserController@register');
Route::post('/login', 'UserController@login');

Route::group(['middleware' => ['jwt.verify']], function () 
{
Route::get('/customers', 'CustomersController@show');
Route::post('/customers', 'CustomersController@store');
Route::put('/customers/{id}', 'CustomersController@update');
Route::delete('/customers/{id}', 'CustomersController@destroy');

Route::get('/orders', 'OrdersController@show');
Route::get('/orders/{id}', 'OrdersController@detail');
Route::post('/orders', 'OrdersController@store');
Route::put('/orders/{id}', 'OrdersController@update');
Route::delete('/orders/{id}', 'OrdersController@destroy');

Route::get('/product', 'ProductController@show');
Route::post('/product', 'ProductController@store');
Route::put('/product/{id}', 'ProductController@update');
Route::delete('/product/{id}', 'ProductController@destroy');

Route::get('/transaksi', 'TransaksiController@show');
Route::get('/transaksi/{id}', 'TransaksiController@detail');
Route::post('/transaksi', 'TransaksiController@store');
Route::put('/transaksi/{id}', 'TransaksiController@update');
Route::delete('/transaksi/{id}', 'TransaksiController@destroy');
});