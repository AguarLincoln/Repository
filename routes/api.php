<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/usuario','App\Http\Controllers\UserController@list');
Route::post('/usuario','App\Http\Controllers\UserController@create');
Route::put('/usuario/{id}','App\Http\Controllers\UserController@update');
