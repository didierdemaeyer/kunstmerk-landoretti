<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auction_style extends Model
{
	
	protected $fillable = ['name'];

	/**
	 * Relationships
	 */

	public function auctions()
	{
		return $this->hasMany('Auction');
	}
}
