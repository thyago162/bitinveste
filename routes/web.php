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

Route::get('/','InvestimentoController@index');
Route::Post('/investimentos','InvestimentoController@store');
Route::delete('/investimentos/remover','InvestimentoController@delete');

Route::get('/dashboard','DashboardController@index');