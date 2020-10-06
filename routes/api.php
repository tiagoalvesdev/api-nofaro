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

Route::get("pets", "App\Http\Controllers\PetsController@index");
Route::post("pets", "App\Http\Controllers\PetsController@store");
Route::get("pets/{name?}", "App\Http\Controllers\PetsController@showName");
Route::patch("pets/{pet}", "App\Http\Controllers\PetsController@update");
Route::delete("pets/{pet}", "App\Http\Controllers\PetsController@delete");

Route::get("attendance", "App\Http\Controllers\AttendancesController@index");
Route::post("attendance", "App\Http\Controllers\AttendancesController@store");
Route::get("attendance/{name?}", "App\Http\Controllers\AttendancesController@show");
Route::patch("attendance/{attendance}", "App\Http\Controllers\AttendancesController@update");
Route::delete("attendance/{attendance}", "App\Http\Controllers\AttendancesController@delete");
