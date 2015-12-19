<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
	

	/**
	 * Relationships
	 */

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function auction()
	{
		return $this->belongsTo('Auction');
	}
}
