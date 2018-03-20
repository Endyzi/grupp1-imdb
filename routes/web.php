<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Auth::routes();

Route::get('/', function () {
    return redirect()->route('home'); // när man går in till root-adressen (bara "/") så skicka vidare besökaren till "/home"
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/movies', 'MovieController@index')->name('movies.index');
Route::get('/movies/create', 'MovieController@create')->name('movies.create');
Route::post('/movies', 'MovieController@store')->name('movies.store');
Route::get('/movies/{movie}', 'MovieController@show')->name('movies.show');

Route::get('/genres', 'GenreController@index')->name('genres.index');
Route::get('/genres/create', 'GenreController@create')->name('genres.create');
Route::post('/genres', 'GenreController@store')->name('genres.store');
Route::get('/genres/{genre}/edit', 'GenreController@edit')->name('genres.edit');
Route::post('/genres/{genre}', 'GenreController@update')->name('genres.update');
Route::get('/genres/{genre}', 'GenreController@show')->name('genres.show');

Route::get('/directors', 'DirectorController@index')->name('directors.index');
Route::get('/directors/create', 'DirectorController@create')->name('directors.create');
Route::post('/directors', 'DirectorController@store')->name('directors.store');
Route::get('/directors/{director}/edit', 'DirectorController@edit')->name('directors.edit');
Route::post('/directors/{director}', 'DirectorController@update')->name('directors.update');
Route::get('/directors/{director}', 'DirectorController@show')->name('directors.show');

/*
Route::get('/directors', 'DirectorController@index')->name('directors.index');
Route::get('/directors/create', 'DirectorController@create')->name('directors.create');
Route::post('/directors', 'DirectorController@store')->name('directors.store');
Route::get('/directors/{director}/edit', 'DirectorController@show')->name('directors.edit');
Route::post('/directors/{director}', 'DirectorController@show')->name('directors.update');
Route::get('/directors/{director}', 'DirectorController@show')->name('directors.show');
*/
