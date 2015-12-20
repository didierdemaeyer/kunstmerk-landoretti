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