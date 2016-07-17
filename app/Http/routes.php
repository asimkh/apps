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

/*

Route::get('/', function () {
    return view('welcome');
});
*/

//Route::get('/', 'PagesController@home');


Route::get('/', [
	'as' => 'home',
	'uses' => 'PagesController@home'
	]);




/*
|--------------------------------------------------------------------------
| Registration
|--------------------------------------------------------------------------
|

*/

Route::get('register', [
	'as' => 'register_path',
	'uses' => 'RegistrationController@signup'
	]);

Route::post('register', [
	'as' => 'register_path',
	'uses' => 'RegistrationController@store'
	]);



/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
|

*/

Route::get('login', [
	'as' => 'user_login',
	'uses' => 'LoginController@login'
	]);

Route::post('login', [
	'as' => 'user_login',
	'uses' => 'LoginController@detect'
	]);



/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
|

*/

Route::get('about', [
	'as' => 'about',
	'uses' => 'PagesController@about'
	]);


Route::get('privacy', [
	'as' => 'privacy',
	'uses' => 'PagesController@privacy'
	]);

Route::get('terms', [
	'as' => 'terms',
	'uses' => 'PagesController@terms'
	]);

/*
|--------------------------------------------------------------------------
| Shout
|--------------------------------------------------------------------------
|

*/

Route::get('shout', [
	'as' => 'give_shout',
	'uses' => 'ShoutController@giveShout'
	]);

Route::post('shout', [
	'as' => 'give_shout',
	'uses' => 'ShoutController@store'
	]);


