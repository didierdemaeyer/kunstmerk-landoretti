<?php

namespace App\Http\Controllers;

use App\Auction;
use App\Auction_style;
use App\Http\Requests\CreateAuctionRequest;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuctionsController extends Controller {

	public function getOverview()
	{
		$auctions = Auction::getActiveAuctions(8);

		// divide all auctions into 2 variables, easier for use in view
		$auctions_1 = $auctions->slice(0, 4);
		$auctions_2 = $auctions->slice(4, 4);

		return view('auctions.overview', compact('auctions', 'auctions_1', 'auctions_2'));
	}
	
	public function getMyAuctions()
	{
		$user = Auth::user();

		$pendingAuctions = $user->auctions;
		$refusedAuctions = $user->auctions;
		$activeAuctions = $user->getActiveAuctions();
		$expiredAuctions = $user->getExpiredAuctions();
		$soldAuctions = $user->getSoldAuctions();

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
		// get auction_styles sorted based on locale
		if (\App::getLocale() == 'en')
		{
			$auction_styles = Auction_style::orderBy('name_en')->get();
		} else
		{
			$auction_styles = Auction_style::orderBy('name_nl')->get();
		}

		return view('auctions.create', compact('auction_styles'));
	}

	public function store(CreateAuctionRequest $request)
	{
		$timestamp = time();
		$destinationPath = 'img/uploads/';
		$input = $request->all();

		// handle uploaded files
		if ($request->hasFile('image_artwork'))
		{
			$file = $request->file('image_artwork');                      // get the uploaded file
			$filename = $timestamp . '_' . $file->getClientOriginalName();  // get original filename
			$file->move($destinationPath, $filename);                     // move file to /img/uploads/
			$input['image_artwork'] = '/' . $destinationPath . $filename;  // change filename to 'timestamp_filename'
		}
		if ($request->hasFile('image_signature'))
		{
			$file = $request->file('image_signature');
			$filename = $timestamp . '_' . $file->getClientOriginalName();
			$file->move($destinationPath, $filename);
			$input['image_signature'] = '/' . $destinationPath . $filename;
		}
		if ($request->hasFile('image_optional'))
		{
			$file = $request->file('image_optional');
			$filename = $timestamp . '_' . $file->getClientOriginalName();
			$file->move($destinationPath, $filename);
			$input['image_optional'] = '/' . $destinationPath . $filename;
		}

		// set year and enddate to correct format for database
		$input['enddate'] = Carbon::createFromFormat('d/m/Y H:i:s', $input['enddate'] . '00:00:00');

		// create new auction
		$auction = Auction::create($input);

		// set auction_style
		$auction_style = Auction_style::findOrFail($request->get('auction_style'));
		$auction->auction_style()->associate($auction_style);

		// set owner
		$owner = Auth::user();
		$auction->owner()->associate($owner);

		// save associations
		$auction->save();

		return redirect()->route('auctions.myauctions');
	}

	public function show($slug)
	{
		$auction = Auction::findBySlugOrFail($slug);

		// related auctions
		$related_auctions = Auction::getActiveAuctions(4);


		// check if it's in your watchlist
		$user = Auth::user();
		if ($user) {
			$isInWatchlist = $user->watchlist()->find($auction->id) ? true : false;
		}
		else {
			$isInWatchlist = null;
		}

		return view('auctions.show', compact('auction', 'related_auctions', 'isInWatchlist'));
	}
}
