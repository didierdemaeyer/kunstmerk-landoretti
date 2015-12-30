<?php

namespace App\Http\Controllers;

use App\Auction;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
	public function home()
	{
		$auctions = Auction::getActiveAuctions(3);

		return view('pages.home', compact('auctions'));
	}
}
