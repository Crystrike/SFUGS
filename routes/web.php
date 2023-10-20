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
Route::get('/genres','Genre  Controller@index');
Route::get('/genres/create','GenreController@create');
Route::get('/genres/update','GenreController@update');
Route::get('/genres/delete','GenreController@delete');
Route::get('/games', 'GameController@index');
Route::resource('games','GameController');
