<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PlaceBidRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return \Auth::check();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'auction_id' => 'required|integer',
			'bid' => 'required|numeric|min:0|max:9999999999999.99|regex:/^\d*(\.\d{2})?$/'
		];
	}
}
