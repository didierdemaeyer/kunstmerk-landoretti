<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{


	public function getRegister()
	{
		return view('auth.register');
	}

	public function postRegister(Request $request)
	{
		dd($request->all());
	}
}
