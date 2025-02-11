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

Route::get('/log', function () {
    return view('login');
});

Route::get('/cad', function () {
    return view('cadastro');
});

Route::get('/admin','App\Http\Controllers\ClienteController@index');
Route::get('/admCinema','App\Http\Controllers\CinemaController@index');




