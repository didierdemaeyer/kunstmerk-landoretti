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

		return view('user.profile', compact('user'));
	}
}
