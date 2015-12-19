<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
	
	protected $fillable = ['question', 'answer'];

	/**
	 * Relationships
	 */

	public function categories()
	{
		return $this->belongsToMany('Categorie', 'faq_categorie');
	}
}
