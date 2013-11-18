<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/question2', function()
{
	return View::make('question2');
});

Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('films', 'FilmsController');

Route::resource('directors', 'DirectorsController');

Route::resource('genres', 'GenresController');

Route::resource('actors', 'ActorsController');