<?php

namespace App\Http\Controllers;

use App\Auction;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WatchlistController extends Controller {

	public function getWatchlist()
	{
		$user = Auth::user();
		$auctions = $user->watchlist;

		return view('watchlist', compact('auctions'));
	}

	public function getActiveWatchlist()
	{
		$user = Auth::user();
		$auctions = $user->watchlist;   // get enddate > Carbon::now()

		return view('watchlist', compact('auctions'));
	}

	public function getEndedWatchlist()
	{
		$user = Auth::user();
		$auctions = $user->watchlist;   // get enddate < Carbon::now()

		return view('watchlist', compact('auctions'));
	}

	public function addToWatchlist($id)
	{
		$user = Auth::user();
		$auction = Auction::findOrFail($id);

		$user->watchlist()->attach($auction);

		return back();
	}

	public function removeFromWatchlist($id)
	{
		$user = Auth::user();
		$auction = Auction::findOrFail($id);

		$user->watchlist()->detach($auction);

		return back();
	}
}
