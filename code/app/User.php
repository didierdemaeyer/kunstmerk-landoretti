<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
	AuthorizableContract,
	CanResetPasswordContract {

	use Authenticatable, Authorizable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password', 'postalcode', 'city', 'address', 'phone'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];


	/**
	 * Relationships
	 */

	public function role()
	{
		return $this->belongsTo('App\Role');
	}

	public function country()
	{
		return $this->belongsTo('App\Country', 'country_id');
	}

	public function auctions()
	{
		return $this->hasMany('App\Auction', 'owner_id');
	}

	public function bought()
	{
		return $this->hasMany('App\Auction', 'buyer_id');
	}

	public function watchlist()
	{
		return $this->belongsToMany('App\Auction', 'watchlist');
	}

	public function bids()
	{
		return $this->hasMany('App\Bid');
	}


	/*
	 * Functions
	 */
	public function getActiveAuctions()
	{
		return $this->auctions()
			->where('enddate', '>', Carbon::now())
			->orderBy('enddate', 'ASC')
			->get();
	}
}
