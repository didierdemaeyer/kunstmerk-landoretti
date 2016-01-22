<?php

namespace App\Http\Controllers;

use App\Auction;
use App\Faq;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller {

	public function search(Request $request)
	{
		$searchquery = $request->get('search');

		$search_auctions = Auction::where('buyer_id', '=', 0)
			->where('enddate', '>', Carbon::now())
			->search($searchquery)
			->paginate(3, ['*'], 'auctions');

		$search_faqs = Faq::search($searchquery)->paginate(3, ['*'], 'faqs');

		return view('pages.search', compact('searchquery', 'search_auctions', 'search_faqs'));
	}
}
