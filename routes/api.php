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


Route::get('/','App\Http\Controllers\UserController@list');
Route::post('/create','App\Http\Controllers\UserController@create');
Route::post('/update','App\Http\Controllers\UserController@update');
