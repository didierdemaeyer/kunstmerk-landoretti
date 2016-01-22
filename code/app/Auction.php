<?php

namespace App;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Auction extends Model implements SluggableInterface {

	use SearchableTrait;
	use SluggableTrait;

	protected $sluggable = [
		'build_from' => 'title',
		'save_to'    => 'slug',
	];

	protected $searchable = [
		'columns' => [
			'title'          => 10,
			'artist'         => 10,
			'year'           => 8,
			'description_en' => 4,
			'description_nl' => 4,
			'condition_en'   => 4,
			'condition_nl'   => 4,
			'origin_en'      => 4,
			'origin_nl'      => 4,
			'min_price'      => 8,
			'max_price'      => 8,
			'buyout_price'   => 8,
		],
	];

	protected $dates = ['enddate'];

	protected $fillable = [
		'title',
		'artist',
		'year',
		'width',
		'height',
		'depth',
		'description_en',
		'description_nl',
		'condition_en',
		'condition_nl',
		'origin_en',
		'origin_nl',
		'image_artwork',
		'image_signature',
		'image_optional',
		'min_price',
		'max_price',
		'buyout_price',
		'enddate',
	];

	/**
	 * Relationships
	 */

	public function bids()
	{
		return $this->hasMany('App\Bid');
	}

	public function owner()
	{
		return $this->belongsTo('App\User', 'owner_id');
	}

	public function buyer()
	{
		return $this->belongsTo('App\User', 'buyer_id');
	}

	public function auction_style()
	{
		return $this->belongsTo('App\Auction_style');
	}


	/**
	 * Functions
	 */

	public static function getActiveAuctions($number)
	{
		return Auction::where('enddate', '>', Carbon::now())
			->where('buyer_id', '=', 0)
			->orderBy('enddate', 'ASC')
			->paginate($number);
	}

	public function getHighestBid()
	{
		return $this->hasMany('App\Bid')
			->orderBy('bid', 'DESC')
			->first();
	}

}
