<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();
Route::get('/', 'TweetsController@index');
Route::resource('tweets', 'TweetsController');
Route::get('/tweets/{id}/delete', 'TweetsController@destroy');
Route::resource('users', 'UsersController', ['only' => 'show']);
Route::resource('tweets.comments', 'CommentsController');
