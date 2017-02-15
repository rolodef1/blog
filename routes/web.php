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
	return view('welcome');
});

Route::group(['prefix'=>'admin'],function(){	
	Route::group(['middleware' => ['auth']], function (){
		Route::get('/', ['as'=>'admin.index',function () {
			return view('welcome');
		}]);
		Route::resource('users', 'UsersController');
		Route::resource('categories', 'CategoriesController');
		Route::resource('tags', 'TagsController');
		Route::resource('articles', 'ArticlesController');
	});
	Route::get('auth/login',['uses'=>'Auth\LoginController@showLoginForm','as'=>'auth.login']);
	Route::post('auth/login',['uses'=>'Auth\LoginController@login','as'=>'auth.login']);
	Route::get('auth/logout',['uses'=>'Auth\LoginController@logout','as'=>'auth.logout']);
});