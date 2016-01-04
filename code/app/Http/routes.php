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
 * Routes only accessible when not logged in
 */
Route::group(['middleware' => 'guest'], function ()
{
	// Registration routes
	Route::get('register', ['as' => 'getRegister', 'uses' => 'AuthController@getRegister']);
	Route::post('register', ['as' => 'postRegister', 'uses' => 'AuthController@postRegister']);
	// Login route
	Route::post('login', ['as' => 'postLogin', 'uses' => 'AuthController@postLogin']);

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
Route::group(['middleware' => 'auth'], function ()
{
	// User
	Route::get('profile', ['as' => 'profile', 'uses' => 'UsersController@getProfile']);

	// Auctions
	Route::get('myauctions', ['as' => 'auctions.myauctions', 'uses' => 'AuctionsController@getMyAuctions']);
	Route::get('myauctions/create', ['as' => 'auctions.create', 'uses' => 'AuctionsController@create']);
	Route::post('myauctions', ['as' => 'auctions.store', 'uses' => 'AuctionsController@store']);

	// Watchlist
	Route::get('watchlist', ['as' => 'watchlist', 'uses' => 'WatchlistController@getWatchlist']);
	Route::get('watchlist/active', ['as' => 'watchlist.active', 'uses' => 'WatchlistController@getActiveWatchlist']);
	Route::get('watchlist/ended', ['as' => 'watchlist.ended', 'uses' => 'WatchlistController@getEndedWatchlist']);
	Route::get('watchlist/add/{id}', ['as' => 'watchlist.add', 'uses' => 'WatchlistController@addToWatchlist']);
	Route::get('watchlist/remove/{id}', ['as' => 'watchlist.remove', 'uses' => 'WatchlistController@removeFromWatchlist']);
	Route::post('watchlist/remove-multiple', ['as' => 'watchlist.removeMultiple', 'uses' => 'WatchlistController@removeMultipleFromWatchlist']);
	Route::get('watchlist/clear-all', ['as' => 'watchlist.clearAll', 'uses' => 'WatchlistController@clearAll']);
});


/*
 * Routes accessible to anyone
 */

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@getHome']);
Route::get('logout', ['as' => 'getLogout', 'uses' => 'AuthController@getLogout']);

Route::get('/faq', ['as' => 'faq', 'uses' => 'PagesController@getFaq']);

// Auction routes
Route::get('art', ['as' => 'auctions.overview', 'uses' => 'AuctionsController@getOverview']);
Route::get('art/{slug}', ['as' => 'auctions.show', 'uses' => 'AuctionsController@show']);

