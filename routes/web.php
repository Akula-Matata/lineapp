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

Route::group(['middleware' => ['web']], function () {
	//auth
	Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
	Route::post('auth/login', 'Auth\LoginController@login');
	Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

	//register
	Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
	Route::post('auth/register', 'Auth\RegisterController@register');

	//password
	//Route::get('auth/passwords/reset/{token?}', 'Auth\ResetPasswordController@showResetForm');
	//Route::post('auth/passwords/email', 'Auth\ResetPasswordController@setResetLinkEmail');
	//Route::post('auth/passwords/reset', 'Auth\ResetPasswordController@reset');

	//comments
	Route::post('comments/{post_id}', ['as' => 'comments.store', 'uses' => 'CommentsController@store']);

	Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
	Route::get('blog', ['as' => 'blog.index', 'uses' => 'BlogController@getIndex']);
	Route::get('/', 'PagesController@getIndex');
	Route::resource('posts', 'PostController');
});