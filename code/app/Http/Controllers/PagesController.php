<?php

namespace App\Http\Controllers;

use App\Auction;
use App\Faq;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller {

	public function getHome()
	{
		$auctions = Auction::getActiveAuctions(3);

		return view('pages.home', compact('auctions'));
	}

	public function getFaq()
	{
		$faqs = Faq::all();

		return view('pages.faq', compact('faqs'));
	}
}
