<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{

	protected $fillable = ['name'];

	/**
	 * Relationships
	 */

	public function faq()
	{
		return $this->belongsToMany('Categorie', 'faq_categorie');
	}
}
