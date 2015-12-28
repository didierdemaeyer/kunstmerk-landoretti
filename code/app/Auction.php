<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model {

	protected $dates = ['enddate'];

	protected $fillable = [
		'title',
		'artist',
		'year',
		'width',
		'height',
		'depth',
		'description_en',
		'description_nl',
		'condition_en',
		'condition_nl',
		'origin_en',
		'origin_nl',
		'image_artwork',
		'image_signature',
		'image_optional',
		'min_price',
		'max_price',
		'buyout_price',
		'enddate'
	];

	/**
	 * Relationships
	 */

	public function bids()
	{
		return $this->hasMany('App\Bid');
	}

	public function owner()
	{
		return $this->belongsTo('App\User', 'owner_id');
	}

	public function buyer()
	{
		return $this->belongsTo('App\User', 'buyer_id');
	}

	public function auction_style()
	{
		return $this->belongsTo('App\Auction_style');
	}
}
