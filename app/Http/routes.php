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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('welcome');
});

Route::group(['middleware' => ['web']], function () {

	Route::get('/login', ['uses' => 'LoginController@login']);
	Route::get('/', ['uses' => 'LoginController@login']);
	Route::post('/loginAjax', ['uses' => 'LoginController@loginAjax']);
});

// 路由组、路由前缀
Route::group(['prefix'=>'test'], function () {
	// 全局约束 RouteServiceProvider
	Route::get('/{id}', function ($id) {
		return redirect()->route('profile', ['id'=>$id]);
	});

	// 命名路由 http://localhost/my_laravel/public/user/profile/1
	Route::get('/profile/{id?}', function ($id = 1) {
		return '命名路由';
	})->name('profile');

	// 隐式绑定
	Route::get('api/users/{user}', function (App\User $user) {
		return $user->email;
	});

	Route::get('/info/{age?}', function ($age = 300) {
		$route = Route::current();
		$name = Route::currentRouteName();
		$action = Route::currentRouteAction();
		return 'info';
	})->middleware('checkage');

	Route::get('/request', ['uses'=>'TestController@test']);
	Route::post('/json', ['uses'=>'TestController@getJson']);
	Route::get("/account", ['uses'=>'TestController@getAllAccount']);
});



