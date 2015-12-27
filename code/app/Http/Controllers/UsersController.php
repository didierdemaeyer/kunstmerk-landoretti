<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller {

	public function getProfile()
	{
		$user = \Auth::user();

		$auctions = $user->getActiveAuctions();

		return view('user.profile', compact('user', 'auctions'));
	}
}
