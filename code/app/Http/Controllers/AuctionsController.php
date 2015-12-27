<?php

namespace App\Http\Controllers;

use App\Auction;
use App\Auction_style;
use App\Http\Requests\CreateAuctionRequest;
use App\User;
use Carbon\Carbon;
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
		// rename and move files to /img/uploads/
		$timestamp = time();
		$destinationPath = 'img/uploads/';
		$input = $request->all();
		if ($request->hasFile('image_artwork')) {
			$file = $request->file('image_artwork');
			$filename = $timestamp .'_'. $file->getClientOriginalName();
			$file->move($destinationPath, $filename);
			$input['image_artwork'] = '/'. $destinationPath . $filename;
		}
		if ($request->hasFile('image_signature')) {
			$file = $request->file('image_signature');
			$filename = $timestamp .'_'. $file->getClientOriginalName();
			$file->move($destinationPath, $filename);
			$input['image_signature'] = '/'. $destinationPath . $filename;
		}
		if ($request->hasFile('image_optional')) {
			$file = $request->file('image_optional');
			$filename = $timestamp .'_'. $file->getClientOriginalName();
			$file->move($destinationPath, $filename);
			$input['image_optional'] = '/'. $destinationPath . $filename;
		}
//		$image_artwork = $request->hasFile('image_artwork') ? $request->file('image_artwork')->move(asset('img/uploads'), $timestamp . '_' . $request->getClientOriginalName()) : null;
//		$image_signature = $request->hasFile('image_signature') ? $request->file('image_signature')->move(asset('img/uploads'), $timestamp . '_' . $request->getClientOriginalName()) : null;
//		$image_optional = $request->hasFile('image_optional') ? $request->file('image_optional')->move(asset('img/uploads'), $timestamp . '_' . $request->getClientOriginalName()) : null;

		$auction = Auction::create($input);

		// set auction_style
		$auction_style = Auction_style::findOrFail($request->get('auction_style'));
		$auction->auction_style()->associate($auction_style);

		// set owner
		$owner = \Auth::user();
		$auction->owner()->associate($owner);

		// save associations
		$auction->save();

		return redirect()->route('auctions.myauctions');
	}


}
