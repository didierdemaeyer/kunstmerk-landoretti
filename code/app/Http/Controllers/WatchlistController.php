<?php

namespace App\Http\Controllers;

use App\Auction;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WatchlistController extends Controller {

	public function getWatchlist()
	{
		$user = Auth::user();
		$auctions = $user->watchlist;

		$count_all_auctions = $user->watchlist()->count();
		$count_active_auctions = $user->watchlist()->where('enddate', '>', Carbon::now())->count();
		$count_ended_auctions = $user->watchlist()->where('enddate', '<', Carbon::now())->count();

		return view('watchlist', compact('auctions', 'count_all_auctions', 'count_active_auctions', 'count_ended_auctions'));
	}

	public function getActiveWatchlist()
	{
		$user = Auth::user();
		$auctions = $user->watchlist()->where('enddate', '>', Carbon::now());   // get enddate > Carbon::now()

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
