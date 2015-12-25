<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Role;
use App\User;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller {

	public function postLogin(LoginRequest $request)
	{
		if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')], true)) {
			// do something?
		}

		return redirect()->route('home');
	}

	public function getLogout()
	{
		Auth::logout();

		return redirect()->route('home');
	}

	public function getRegister()
	{
		return view('auth.register');
	}

	public function postRegister(RegisterUserRequest $request)
	{
		// encrypt password
		$request['password'] = bcrypt($request['password']);
		// create user
		$user = User::create($request->all());

		// set default role for user to user
		$role = Role::where('name_en', 'user')->first();
		$role->users()->save($user);

		Auth::login($user);

		return redirect()->route('home');
	}
}
