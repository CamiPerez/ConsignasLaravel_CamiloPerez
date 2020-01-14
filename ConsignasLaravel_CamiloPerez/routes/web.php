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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/peliculas', 'MovieController@index');
Route::get('/actores', 'ActorController@index');
Route::get('/generos', 'GenreController@index');
Route::get('/peliculas/{movie}', 'MovieController@show');
Route::get('/actores/{actor}', 'ActorController@show');
