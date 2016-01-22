<?php

namespace App\Http\Controllers;

use App\Auction;
use App\Bid;
use App\Http\Requests\PlaceBidRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class BidsController extends Controller {

	public function index()
	{
		$bids = Auth::user()->bids()->orderBy('created_at', 'DESC')->get();

		return view('bids.index', compact('bids'));
	}

	public function placeBid(PlaceBidRequest $request)
	{
		$auction = Auction::findBySlugOrId($request->get('auction_id'));
		$user = Auth::user();

		$highest_bid = $auction->getHighestBid();

		if (isset($highest_bid) && $request->get('bid') <= $highest_bid->bid) {
			return back()->withErrors(['Your bid must be higher than the current highest bid, which is &euro;' . $highest_bid->bid . '.'])->withInput();
		}

		$user->bids()->create($request->only('auction_id', 'bid'));

		return back();
	}
}
