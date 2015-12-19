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
		return $this->hasMany('Bid');
	}

	public function owner()
	{
		return $this->belongsTo('User', 'owner_id');
	}

	public function buyer()
	{
		return $this->belongsTo('User', 'buyer_id');
	}

	public function auction_style()
	{
		return $this->belongsTo('Auction_style');
	}
}
