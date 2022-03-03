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

//peticion para traer todos tipos de habitaciones creadas
Route::get('/habitaciones',[App\Http\Controllers\IndexController::class,'get_habitaciones']);
//peticion para traer todas las ciudades creadas
Route::get('/ciudades',[App\Http\Controllers\IndexController::class,'get_ciudades']);
//crear hotel
Route::post('/create_hotel',[App\Http\Controllers\IndexController::class,'create_hotel']);
//buscar hoteles
Route::get('/hotel',[App\Http\Controllers\IndexController::class,'get_hoteles']);

Route::post('/guardar_h',[App\Http\Controllers\IndexController::class,'guardar_habitaciones']);


