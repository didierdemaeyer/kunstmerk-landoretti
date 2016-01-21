@extends('layouts.master')

@section('content')

	@include('includes/header')

	{!! Breadcrumbs::render('mybids')  !!}

	{{-- Set local to dutch or english based on cookie --}}
	<?php
	if (App::getLocale() == 'nl')
	{
		setlocale(LC_ALL, 'nl_NL.utf8');
	} else
	{
		setlocale(LC_ALL, 'en_EN');
	}
	?>

	<div class="container">
		<div class="my-auctions">
			<div class="row">
				<div class="col-md-10">
					<h1>My Bids</h1>
				</div>
			</div>

			<div class="row">

				<div class="col-md-12">
					@if(count($bids))
						<table class="table table-bordered">
							<thead>
							<tr>
								<th></th>
								<th>Auction details</th>
								<th>Your bid</th>
								<th>Highest bid</th>
								<th>Remaining time</th>
							</tr>
							</thead>
							<tbody>
							@foreach($bids as $bid)
								<tr>
									<td class="img-preview"><a href="{{ route('auctions.show', $bid->auction->slug) }}" style="background-image:url({{ $bid->auction->image_artwork }});"><span class="overlay"><i class="fa fa-search"></i></span></a></td>
									<td>
										<h3>{{ $bid->auction->title }}</h3>
										<p class="age">{{ $bid->auction->year }}, {{ $bid->auction->artist }}</p>
									</td>
									<td><h3>&euro; {{ (float)$bid->bid }}</h3></td>
									<td><h3>&euro; {{ (float)$bid->auction->getHighestBid()->bid }}</h3></td>
									<td><p class="remaining-time" data-time="{{ $bid->auction->enddate }}"></p></td>
								</tr>
							@endforeach
							</tbody>
						</table>
					@else
						<p>You have no made any bids yet.</p>
					@endif
				</div>

			</div>
		</div>
	</div>
@stop


@section('scripts')
	<script>

		(function ($) {
			$.each($('.remaining-time'), function () {
				var time = $(this).data('time');
				$(this).countdown(time, function (event) {
					$(this).html(event.strftime('%-Dd %Hu %Mm'));
				});
			});
		})(jQuery);

	</script>
@stop