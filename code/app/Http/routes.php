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


Route::group(['before' => 'guest'], function() {
	// Registration routes
	Route::get('register', ['as' => 'getRegister', 'uses' => 'AuthController@getRegister']);
	Route::post('register', ['as' => 'postRegister', 'uses' => 'AuthController@postRegister']);
	// Authentication Routes
	Route::post('login', ['as' => 'postLogin', 'uses' => 'AuthController@postLogin']);
	Route::get('logout', ['as' => 'getLogout', 'uses' => 'AuthController@getLogout']);

	// Password reset link request routes...
	Route::get('password/email', 'Auth\PasswordController@getEmail');
	Route::post('password/email', 'Auth\PasswordController@postEmail');

	// Password reset routes...
	Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
	Route::post('password/reset', 'Auth\PasswordController@postReset');
});


Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);




/**
 * TEMP ROUTES
 */

Route::get('auctions/create', function () {
	return view('auctions.create');
});

Route::get('profile', ['as' => 'profile', function () {
	return view('user.profile');
}]);



Route::get('details', function () {
	return view('details');
});
Route::get('myauctions', ['as' => 'myauctions', function () {
	return view('myauctions');
}]);
Route::get('watchlist', ['as' => 'watchlist', function () {
	return view('watchlist');
}]);
Route::get('art', ['as' => 'auctions.overview', function() {
	return view('auctions.overview');
}]);