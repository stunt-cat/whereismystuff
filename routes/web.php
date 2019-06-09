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

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/mystuff', 'PagesController@mystuff');

Route::resource('games', 'GamesController');
/*Route::get('/games', 'GamesController@index');

Route::get('/games/create', 'GamesController@create');

Route::get('/games/{id}', 'GamesController@show');

Route::post('/games', 'GamesController@store');

Route::get('/games/{id}/edit', 'GamesController@edit');

Route::patch('/games/{id}', 'GamesController@update');

Route::delete('/games/{id}', 'GamesController@destroy');*/
