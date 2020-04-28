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

Route::get('/changed', function () {
    return view('welcome');
});
Route::get('/Customer/{id}', 'MyController@Custom');
Route::post('/sign/Customer/{id}', 'MyController@sign');
Route::get('list/products', 'MyController@list');
Route::post('/bought', 'MyController@buy');
