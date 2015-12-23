<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{


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
