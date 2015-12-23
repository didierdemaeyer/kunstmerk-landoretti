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

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

// Registration Routes
Route::get('register', ['as' => 'getRegister', 'uses' => 'AuthController@getRegister']);
Route::post('register', ['as' => 'postRegister', 'uses' => 'AuthController@postRegister']);





/**
 * TEMP ROUTES
 */

Route::get('auctions/create', function () {
	return view('auctions.create');
});

Route::get('profile', function () {
	return view('user.profile');
});



Route::get('home', function () {
	return view('home');
});
Route::get('details', function () {
	return view('details');
});
Route::get('my-auctions', function () {
	return view('my-auctions');
});
Route::get('watchlist', function () {
	return view('watchlist');
});
Route::get('art', ['as' => 'auctions.overview', function() {
	return view('auctions.overview');
}]);