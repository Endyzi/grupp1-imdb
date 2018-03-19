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

Route::get('/genres', 'GenreController@index')->name('genres.index');
Route::get('/genres/create', 'GenreController@create')->name('genres.create');
Route::post('/genres', 'GenreController@store')->name('genres.store');
Route::get('/genres/{genre}', 'GenreController@show')->name('genres.show');
