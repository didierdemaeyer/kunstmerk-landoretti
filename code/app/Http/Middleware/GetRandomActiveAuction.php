<?php

namespace App\Http\Middleware;

use App\Auction;
use Carbon\Carbon;
use Closure;

class GetRandomActiveAuction {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$header_auction = Auction::where('enddate', '>', Carbon::now())->orderByRaw('RAND()')->first();

		$request->session()->put(compact('header_auction'));

		return $next($request);
	}
}
