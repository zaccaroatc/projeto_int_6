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
//*/

Route::group(['namespace' => 'Api', 'as' => 'api.'], function(){
    //Home
    Route::get('/home', 'ApiController@home');

    // Detalhes do Ponto Turístico
    Route::get('/point/{id}', 'ApiController@showPoint');

    // News
    Route::get('/news/{id}','ApiController@showNews');

    // Single
    Route::get('/single/{id}','ApiController@showSingle');
});
