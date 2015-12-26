<?php

namespace App\Http\Controllers;

use App\Auction_style;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuctionsController extends Controller {

	public function getMyAuctions()
	{
		$user = \Auth::user();

		$pendingAuctions = $user->auctions;
		$refusedAuctions = $user->auctions;
		$activeAuctions = $user->getActiveAuctions();
		$expiredAuctions = $user->auctions;
		$soldAuctions = $user->auctions;

		return view('auctions.myauctions', compact(
			'user',
			'pendingAuctions',
			'refusedAuctions',
			'activeAuctions',
			'expiredAuctions',
			'soldAuctions'
		));
	}

	public function create()
	{
		if (\App::getLocale() == 'en') {
			$auction_styles = Auction_style::orderBy('name_en')->get();
		}
		else {
			$auction_styles = Auction_style::orderBy('name_nl')->get();
		}

		return view('auctions.create', compact('auction_styles'));
	}

	public function store(Request $request)
	{
		dd($request->all());

		return redirect()->route('auctions.myauctions');
	}
}
