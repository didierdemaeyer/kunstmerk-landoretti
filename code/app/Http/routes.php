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
 * Routes accessible to anyone
 */
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);


/*
 * Routes only accessible when not logged in
 */
Route::group(['before' => 'guest'], function ()
{
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


/*
 * Routes only accessible when logged in
 */
Route::group(['before' => 'auth'], function ()
{
	// User
	Route::get('profile', ['as' => 'profile', 'uses' => 'UsersController@getProfile']);

	// Auctions
	Route::get('myauctions', ['as' => 'auctions.myauctions', 'uses' => 'AuctionsController@getMyAuctions']);
	Route::get('myauctions/create', ['as' => 'auctions.create', 'uses' => 'AuctionsController@create']);
	Route::post('myauctions', ['as' => 'auctions.store', 'uses' => 'AuctionsController@store']);
});


/**
 * TEMP ROUTES
 */


Route::get('details', function ()
{
	return view('details');
});
Route::get('watchlist', ['as' => 'watchlist', function ()
{
	return view('watchlist');
}]);
Route::get('art', ['as' => 'auctions.overview', function ()
{
	return view('auctions.overview');
}]);