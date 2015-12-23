<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
	
	protected $fillable = ['question_en', 'question_nl', 'answer_en', 'answer_nl'];

	/**
	 * Relationships
	 */

	public function categories()
	{
		return $this->belongsToMany('App\Categorie', 'faq_categorie');
	}
}
