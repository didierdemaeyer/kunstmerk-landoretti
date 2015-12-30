<?php

namespace App\Http\Middleware;

use App\Auction;
use Carbon\Carbon;
use Closure;

class GetLatestAuction {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$header_auction = Auction::where('enddate', '>', Carbon::now())->get()->last();

		$request->session()->put(compact('header_auction'));

		return $next($request);
	}
}
