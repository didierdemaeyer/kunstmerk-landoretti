<?php

namespace App\Http\Controllers;

use App\Auction;
use App\Faq;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

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

	public function getContact($slug = null)
	{
		$auctions = Auction::all();

		if ($slug) {
			$selected_auction = Auction::findBySlugOrFail($slug);
		}
		else {
			$selected_auction = null;
		}

		return view('pages.contact', compact('auctions', 'selected_auction'));
	}

	public function postContact(ContactFormRequest $request)
	{
		$auction = null;
		if ($request->get('auction')) {
			$auction = Auction::findBySlugOrIdOrFail($request->get('auction'));
		}

		// send mail to administrator
		Mail::send('emails.contact', ['request' => $request, 'auction' => $auction], function ($m) use ($request, $auction) {
			$m->from($request->get('email'), "Landoretti - " . $request->get('name'));
			$m->to('didierdemaeyer@gmail.com')->subject($request->get('name') . ' has a question.');
		});

		return back();
	}
}
