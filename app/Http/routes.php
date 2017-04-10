<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::group(['middleware' => ['web']], function () {

	Route::get('/login', ['uses' => 'LoginController@login']);
	Route::get('/', ['uses' => 'LoginController@login']);
	Route::post('/loginAjax', ['uses' => 'LoginController@loginAjax']);
});
