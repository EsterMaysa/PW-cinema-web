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

//esse nome vai no postman localhost:8000/api/'user ou admCinema ou qualquer outro name'      
Route::get('/User' , 'App\Http\Controllers\ClienteController@indexCliente');
Route::get('/admCinema','App\Http\Controllers\CinemaController@store2');

//teste com insert cliente
Route::post('/User' , 'App\Http\Controllers\ClienteController@storeapi');
/*api/User*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

