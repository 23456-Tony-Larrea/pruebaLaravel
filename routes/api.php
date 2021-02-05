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

Route::get("ConfigurationGet","App\Http\Controllers\ConfigurationController@index");
Route::get("PeopleGet","App\Http\Controllers\PeopleController@index");
Route::get("RoleGet","App\Http\Controllers\RoleController@index");

Route::post("ConfigurationPost","App\Http\Controllers\ConfigurationController@store");
Route::post("PeoplePost","App\Http\Controllers\PeopleController@store");
Route::post("RolePost","App\Http\Controllers\RoleController@store");

Route::patch("ConfigurationPath/{id}","App\Http\Controllers\ConfigurationController@update");
Route::patch("PeoplePath/{id}","App\Http\Controllers\PeopleController@update");
Route::patch("RolePath/{id}","App\Http\Controllers\RoleController@update");

Route::delete("ConfigurationDelete/{id}","App\Http\Controllers\ConfigurationController@destroy");
Route::delete("PeopleDelete/{id}","App\Http\Controllers\PeopleController@destroy");
Route::delete("RoleDelete/{id}","App\Http\Controllers\RoleController@destroy");
