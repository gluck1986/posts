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

Route::get('/', 'PostController@index');
Route::get('/newpost','PostController@create');
Route::post('/savepost','PostController@store');
Route::get('/viewpost/{id}','PostController@show');
Route::get('/editpost/{id}','PostController@edit');
Route::post('/updatepost/{id}','PostController@update');
Route::delete('/delete/{id}','PostController@destroy');