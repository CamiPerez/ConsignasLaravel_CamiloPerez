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

Route::get('/', 'GenreController@main');
Auth::routes();

Route::get('/home', 'GenreController@main');
Route::get('/peliculas', 'MovieController@index');
Route::get('/actores', 'ActorController@index');
Route::get('/generos', 'GenreController@index');
Route::get('/peliculas/{movie}', 'MovieController@show');
Route::get('/actores/nuevo', 'ActorController@create');
Route::post('/actores', 'ActorController@store');
Route::get('/actores/{actor}', 'ActorController@show');
Route::get('/peliculas/{movie}/edit', 'MovieController@edit');
Route::patch('/movies/{movie}', 'MovieController@update');
Route::get('/generos/{genre}', 'GenreController@show');
