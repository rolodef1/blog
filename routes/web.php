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

Route::get('/',function(){
	return view('front.home');
});

Route::group(['prefix'=>'blog'],function(){
	Route::get('/',[
		'as'=>'front.index', 
		'uses'=>'FrontController@index'
		]);
	Route::get('categories/{name}',[
		'as'=>'front.search.category', 
		'uses'=>'FrontController@searchCategory'
		]);

	Route::get('tags/{name}',[
		'as'=>'front.search.tag', 
		'uses'=>'FrontController@searchTag'
		]);

	Route::get('articles/{slug}',[
		'as'=>'front.view.article', 
		'uses'=>'FrontController@viewArticle'
		]);
});

Route::group(['prefix'=>'admin'],function(){	
	Route::group(['middleware' => ['auth']], function (){
		Route::get('/', ['as'=>'admin.index',function () {
			return view('admin.index');
		}]);
		Route::group(['middleware' => ['admin']], function (){
			Route::resource('users', 'UsersController');
		});
		Route::resource('categories', 'CategoriesController');
		Route::resource('tags', 'TagsController');
		Route::resource('articles', 'ArticlesController');
		Route::get('images',[
			'uses'=>'ImagesController@index',
			'as'=>'images.index'
			]);
	});
	Route::get('auth/login',['uses'=>'Auth\LoginController@showLoginForm','as'=>'auth.login']);
	Route::post('auth/login',['uses'=>'Auth\LoginController@login','as'=>'auth.login']);
	Route::get('auth/logout',['uses'=>'Auth\LoginController@logout','as'=>'auth.logout']);
});