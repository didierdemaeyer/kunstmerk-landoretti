<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterUserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name'                  => 'required',
			'email'                 => 'required|email|unique:users',
			'password'              => 'required|min:4',
			'password_confirmation' => 'required|same:password',
			'country'               => 'required',
			'postalcode'            => 'required',
			'city'                  => 'required',
			'address'               => 'required',
			'phone'                 => 'required',
			'terms_and_conditions'  => 'accepted'
		];
	}
}
