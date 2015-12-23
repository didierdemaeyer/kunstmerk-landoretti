<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	
	protected $fillable = ['name_en', 'name_nl'];

	/**
	 * Relationships
	 */

	public function users()
	{
		return $this->hasMany('App\User');
	}
}
