<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Faq extends Model {

	use SearchableTrait;

	protected $searchable = [
		'columns' => [
			'question_en' => 10,
			'question_nl' => 10,
			'answer_en' => 10,
			'answer_nl' => 10,
		],
	];

	protected $fillable = ['question_en', 'question_nl', 'answer_en', 'answer_nl'];

	/**
	 * Relationships
	 */

	public function categories()
	{
		return $this->belongsToMany('App\Categorie', 'faq_categorie');
	}
}
