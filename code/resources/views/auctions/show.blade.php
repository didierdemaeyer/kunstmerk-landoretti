@extends('layouts.master')

@section('title', $auction->title . ' by ' . $auction->artist)

@section('links')
	<link href="//cdn.rawgit.com/noelboss/featherlight/1.3.5/release/featherlight.min.css" type="text/css" rel="stylesheet" />
@stop

@section('content')

	@include('includes/header')

	{!! Breadcrumbs::render('art.show', $auction) !!}

	<div class="container">
		{{--Display the validation errors --}}
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<div class="details">
			<div class="row">
				<div class="col-md-10">
					<h1>{{ $auction->title }}</h1>
					<p class="top-details">25d 14u 44m <a href="#">({{ count($auction->bids) == 1 ? '1 bid' : count($auction->bids) . ' bids' }}) <i class="fa fa-bars"></i></a></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="col-md-12 big-image" href="{{ $auction->image_artwork }}" data-featherlight="image" style="background-image:url({{ $auction->image_artwork }});"></div>
					<div class="col-md-12 small-images">
						<div class="small-image" data-image="{{ $auction->image_artwork }}" style="background-image:url({{ $auction->image_artwork }});"><div class="overlay"></div></div>
						<div class="small-image" data-image="{{ $auction->image_signature }}" style="background-image:url({{ $auction->image_signature }});"><div class="overlay"></div></div>
						@if ($auction->image_optional)
							<div class="small-image" data-image="{{ $auction->image_optional }}" style="background-image:url({{ $auction->image_optional }});"><div class="overlay"></div></div>
						@endif
					</div>
				</div>
				<div class="short-details col-md-4">
					<h3>{{ $auction->title }}</h3>
					<p class="age">{{ $auction->year  }}, {{ $auction->artist }}</p>
					<hr>
					<p class="time-left">25d 14u 44m left</p>
					<p class="date">{{ $auction->enddate }}</p>
					<hr>
					<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi iste sunt molestiae odit. </p>
					<a class="more" href="#">more</a>
					<div class="bid-now">
						<h5>Estimated Price: </h5>
						<h3>&euro; {{ (float)$auction->min_price }} - &euro; {{ (float)$auction->max_price }}</h3>
						@if ($auction->buyout_price && Auth::check())
							<a class="buy-now" href="{{ route('auctions.buy-now', $auction->slug) }}">Buy now for &euro; {{ (float)$auction->buyout_price }}</a>
						@endif
						<p>bids: {{ count($auction->bids) }}</p>
						<div class="bid-now-sub">
							@if(Auth::check())
								{!! Form::open(['route' => 'placeBid']) !!}

								{!! Form::hidden('auction_id', $auction->id) !!}
								{!! Form::text('bid') !!}
								<button type="submit">BID NOW <i class="fa fa-angle-right"></i></button>

								{!! Form::close() !!}
							@else
								<p>Please log in to place a bid.</p>
							@endif
						</div>
						@if(Auth::user())
							@if ($isInWatchlist)
								<p class="watchlist-remove"><a href="{{ route('watchlist.remove', $auction->id) }}"><i class="fa fa-times"></i>remove from my watchlist</a></p>
							@else
								<p class="watchlist-add"><a href="{{ route('watchlist.add', $auction->id) }}"><i class="fa fa-bars"></i>add to my watchlist</a></p>
							@endif
						@endif
					</div>
				</div>
			</div>
			<div class="row description-auction">
				<div class="col-md-8 description-left">
					<h6>Description</h6>
					<p>{{ App::getLocale() == 'en' ? $auction->description_en : $auction->description_nl }}</p>
					<h6>Condition</h6>
					<p>{{ App::getLocale() == 'en' ? $auction->condition_en : $auction->condition_nl }}</p>
				</div>
				<div class="col-md-4 description-right">
					<h6>Artist</h6>
					<p>{{ $auction->artist }}</p>
					<h6>Dimensions</h6>
					<p>{{ (float)$auction->width }}cm x {{ (float)$auction->height }}cm {{ $auction->depth != 0.00 ? ' x '. (float)$auction->depth . 'cm' : '' }}</p>
						<a class="ask-a-question" href="{{ route('getContact', $auction->slug) }}">
							Ask a question <br>
							about this auction
						</a>
				</div>
			</div>

		</div>
	</div>
	<div class="section-related">
		<div class="container">
			<div class="related-items">
				<div class="row">
					<div class="col-md-12">
						<h3>Related items</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">

						@foreach($related_auctions as $auction)
							<div class="auction-preview">
								<a href="{{ route('auctions.show', $auction->slug) }}" class="auction-image" style="background-image:url({{ $auction->image_artwork }});"><span class="overlay"><i class="fa fa-search"></i></span></a>

								<div class="auction-info">
									<span class="artist">{{ $auction->year }}, {{ $auction->artist }}</span>
									<span class="title">{{ $auction->title }}</span>
									<span class="price">&euro; {{ (float)$auction->min_price }}</span>

									<div class="call-to-action clearfix">
										<span class="timeleft">25d 14u 44m</span>

										<a href="{{ route('auctions.show', $auction->slug) }}" class="btn btn-visit-auction">Visit Auction <i class="fa fa-angle-right"></i></a>
									</div>
								</div>
							</div>
						@endforeach

					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('scripts')
	<script src="//cdn.rawgit.com/noelboss/featherlight/1.3.5/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
	<script>
		(function($) {

			// make height of description-right the same as description-left
//			var height = $(".description-left").height();
//			$(".description-right").height(height);

			$('.small-image').click(function (e) {
				var image = $(this).data('image');

				console.log(image);

				$('.big-image')
						.attr('href', image)
						.css('background-image', 'url(' + image + ')');
			});

		})(jQuery);
	</script>
@stop