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

		$watchlist_filter = 'all';

		return view('watchlist.watchlist', compact(
			'auctions',
			'count_all_auctions',
			'count_active_auctions',
			'count_ended_auctions',
			'watchlist_filter'
		));
	}

	public function getActiveWatchlist()
	{
		$user = Auth::user();
		$auctions = $user->watchlist()->where('enddate', '>', Carbon::now())->get();   // get enddate > Carbon::now()

		$count_all_auctions = $user->watchlist()->count();
		$count_active_auctions = $user->watchlist()->where('enddate', '>', Carbon::now())->count();
		$count_ended_auctions = $user->watchlist()->where('enddate', '<', Carbon::now())->count();

		$watchlist_filter = 'active';

		return view('watchlist.watchlist', compact(
			'auctions',
			'count_all_auctions',
			'count_active_auctions',
			'count_ended_auctions',
			'watchlist_filter'
		));
	}

	public function getEndedWatchlist()
	{
		$user = Auth::user();
		$auctions = $user->watchlist()->where('enddate', '<', Carbon::now())->get();   // get enddate > Carbon::now()

		$count_all_auctions = $user->watchlist()->count();
		$count_active_auctions = $user->watchlist()->where('enddate', '>', Carbon::now())->count();
		$count_ended_auctions = $user->watchlist()->where('enddate', '<', Carbon::now())->count();

		$watchlist_filter = 'ended';

		return view('watchlist.watchlist', compact(
			'auctions',
			'count_all_auctions',
			'count_active_auctions',
			'count_ended_auctions',
			'watchlist_filter'
		));
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

	public function removeMultipleFromWatchlist(Request $request)
	{
		$user = Auth::user();

		// detach all selected auctions in auction_to_detach[] array from watchlist
		$user->watchlist()->detach($request->get('auction_to_detach'));

		return back();
	}

	public function clearAll()
	{
		$user = Auth::user();

		// detach all auctions from watchlist
		$user->watchlist()->detach();

		return back();
	}
}
