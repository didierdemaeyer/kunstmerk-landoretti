<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{

	protected $fillable = ['name_en', 'name_nl'];

	/**
	 * Relationships
	 */

	public function faq()
	{
		return $this->belongsToMany('App\Faq', 'faq_categorie');
	}
}
