<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateAuctionRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return \Auth::check();  // true when user is logged in
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'auction_style'        => 'required',
			'title'                => 'required',
			'year'                 => 'required',
			'width'                => 'required',
			'height'               => 'required',
			'description_en'       => 'required',
			'description_nl'       => 'required',
			'condition_en'         => 'required',
			'condition_nl'         => 'required',
			'origin_en'            => 'required',
			'origin_nl'            => 'required',
			'image_artwork'        => 'required|mimes:jpeg,bmp,png|max:10000',
			'image_signature'      => 'required|mimes:jpeg,bmp,png|max:10000',
			'image_optional'       => 'mimes:jpeg,bmp,png|max:10000',
			'min_price'            => 'required',
			'max_price'            => 'required',
			'enddate'              => 'required',
			'terms_and_conditions' => 'accepted'
		];
	}
}
