<div class="new-auction-section" style="background-image:url({{ Session::get('header_auction')->image_artwork }});">
	<div class="container">
		<div class="col-md-8">

		</div>
		<div class="auction-caption col-md-4">
			<img class="icon-slider" src="{{ asset('img/icon-slider.png') }}" alt="decorative circle to give attention to the artwork details.">
			<h3>{{ Session::get('header_auction')->title }}</h3>
			<hr>
			@if (App::getLocale() == 'en')
				<p>{{  (strlen(Session::get('header_auction')->description_en) > 153) ? substr(Session::get('header_auction')->description_en,0,150).'...' : Session::get('header_auction')->description_en }}</p>
			@else
				<p>{{  (strlen(Session::get('header_auction')->description_nl) > 153) ? substr(Session::get('header_auction')->description_nl,0,150).'...' : Session::get('header_auction')->description_nl }}</p>
			@endif
			<p>Price: &euro; {{ (float)Session::get('header_auction')->min_price }}</p>
			<div class="visit-auction">
				<a href="{{ route('auctions.show', Session::get('header_auction')->slug) }}">VISIT AUCTION <i class="fa fa-angle-right"></i></a>
			</div>
		</div>
		<div class="col-md-2">
			
		</div>
	</div>
</div>