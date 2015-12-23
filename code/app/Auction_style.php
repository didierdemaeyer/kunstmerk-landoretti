<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auction_style extends Model
{
	
	protected $fillable = ['name_en', 'name_nl'];

	/**
	 * Relationships
	 */

	public function auctions()
	{
		return $this->hasMany('App\Auction');
	}
}
