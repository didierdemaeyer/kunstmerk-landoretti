<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Carbon\Carbon;

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
		$current_year = Carbon::now()->year;

		return [
			'auction_style'        => 'required',
			'title'                => 'required',
			'artist'               => 'required',
			'year'                 => 'required|integer|max:' . $current_year,
			'width'                => 'required|numeric',
			'height'               => 'required|numeric',
			'depth'                => 'numeric',
			'description_en'       => 'required',
			'description_nl'       => 'required',
			'condition_en'         => 'required',
			'condition_nl'         => 'required',
			'origin_en'            => 'required',
			'origin_nl'            => 'required',
			'image_artwork'        => 'required|mimes:jpeg,bmp,png|max:10000',
			'image_signature'      => 'required|mimes:jpeg,bmp,png|max:10000',
			'image_optional'       => 'mimes:jpeg,bmp,png|max:10000',
			'min_price'            => 'required|numeric',
			'max_price'            => 'required|numeric',
			'buyout_price'         => 'numeric',
			'enddate'              => 'required|date_format:d/m/Y',
			'terms_and_conditions' => 'accepted'
		];
	}
}
