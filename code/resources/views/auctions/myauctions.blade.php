@extends('layouts.master')

@section('content')

	@include('includes/header')
	@include('includes/breadcrumbs')

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
					<h1>My auctions</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-md-offset-9">
					<a href="{{ route('auctions.create') }}" class="add-button">ADD NEW AUCTION <i class="fa fa-angle-right"></i></a>
				</div>
			</div>
			<div class="row">

				<div class="col-md-12">
					<h3>Pending</h3>
				</div>
				<div class="col-md-12">
					@if(count($pendingAuctions))
						<table class="table table-bordered">
							<thead>
							<tr>
								<th></th>
								<th>Auction details</th>
								<th>Estimated price</th>
								<th>End date</th>
								<th>Remaining time</th>
							</tr>
							</thead>
							<tbody>
							@foreach($pendingAuctions as $auction)
								<tr>
									<td class="img-preview"><a href="{{ route('auctions.show', $auction->id) }}" style="background-image:url({{ $auction->image_artwork }});"><span class="overlay"><i class="fa fa-search"></i></span></a></td>
									<td>
										<h3>{{ $auction->title }}</h3>
										<p class="age">{{ $auction->year }}, {{ $auction->artist }}</p>
									</td>
									<td><h3>&euro; {{ $auction->min_price }}</h3></td>
									<td>
										<p class="date">{{ strftime('%B %d, %Y', strtotime($auction->enddate)) }}</p>
										<p class="date">{{ strftime('%H:%M', strtotime($auction->enddate)) }} (GMT)</p>
									</td>
									<td><p class="remaining-time" data-time="{{ $auction->enddate }}"></p></td>
								</tr>
							@endforeach
							</tbody>
						</table>
					@else
						<p>You currently have no pending auctions.</p>
					@endif
				</div>

				<div class="col-md-12">
					<h3>Refused</h3>
				</div>
				<div class="col-md-12">
					@if(count($refusedAuctions))
						<table class="table table-bordered">
							<thead>
							<tr>
								<th></th>
								<th>Auction details</th>
								<th>Estimated price</th>
								<th>End date</th>
								<th>Remaining time</th>
							</tr>
							</thead>
							<tbody>
							@foreach($refusedAuctions as $auction)
								<tr>
									<td class="img-preview"><a href="{{ route('auctions.show', $auction->id) }}" style="background-image:url({{ $auction->image_artwork }});"><span class="overlay"><i class="fa fa-search"></i></span></a></td>
									<td>
										<h3>{{ $auction->title }}</h3>
										<p class="age">{{ $auction->year }}, {{ $auction->artist }}</p>
									</td>
									<td><h3>&euro; {{ $auction->min_price }}</h3></td>
									<td>
										<p class="date">{{ strftime('%B %d, %Y', strtotime($auction->enddate)) }}</p>
										<p class="date">{{ strftime('%H:%M', strtotime($auction->enddate)) }} (GMT)</p>
									</td>
									<td><p class="remaining-time" data-time="{{ $auction->enddate }}"></p></td>
								</tr>
							@endforeach
							</tbody>
						</table>
					@else
						<p>You currently have no refused auctions.</p>
					@endif
				</div>

				<div class="col-md-12">
					<h3>Active</h3>
				</div>
				<div class="col-md-12">
					@if(count($activeAuctions))
						<table class="table table-bordered">
							<thead>
							<tr>
								<th></th>
								<th>Auction details</th>
								<th>Estimated price</th>
								<th>End date</th>
								<th>Remaining time</th>
							</tr>
							</thead>
							<tbody>
							@foreach($activeAuctions as $auction)
								<tr>
									<td class="img-preview"><a href="{{ route('auctions.show', $auction->id) }}" style="background-image:url({{ $auction->image_artwork }});"><span class="overlay"><i class="fa fa-search"></i></span></a></td>
									<td>
										<h3>{{ $auction->title }}</h3>
										<p class="age">{{ $auction->year }}, {{ $auction->artist }}</p>
									</td>
									<td><h3>&euro; {{ $auction->min_price }}</h3></td>
									<td>
										<p class="date">{{ strftime('%B %d, %Y', strtotime($auction->enddate)) }}</p>
										<p class="date">{{ strftime('%H:%M', strtotime($auction->enddate)) }} (GMT)</p>
									</td>
									<td><p class="remaining-time" data-time="{{ $auction->enddate }}"></p></td>
								</tr>
							@endforeach
							</tbody>
						</table>
					@else
						<p>You currently have no active auctions. Please add a new auction or wait for approval.</p>
					@endif
				</div>

				<div class="col-md-12">
					<h3>Expired</h3>
				</div>
				<div class="col-md-12">
					@if(count($expiredAuctions))
						<table class="table table-bordered">
							<thead>
							<tr>
								<th></th>
								<th>Auction details</th>
								<th>Estimated price</th>
								<th>End date</th>
								<th>Remaining time</th>
							</tr>
							</thead>
							<tbody>
							@foreach($expiredAuctions as $auction)
								<tr>
									<td class="img-preview"><a href="{{ route('auctions.show', $auction->id) }}" style="background-image:url({{ $auction->image_artwork }});"><span class="overlay"><i class="fa fa-search"></i></span></a></td>
									<td>
										<h3>{{ $auction->title }}</h3>
										<p class="age">{{ $auction->year }}, {{ $auction->artist }}</p>
									</td>
									<td><h3>&euro; {{ $auction->min_price }}</h3></td>
									<td>
										<p class="date">{{ strftime('%B %d, %Y', strtotime($auction->enddate)) }}</p>
										<p class="date">{{ strftime('%H:%M', strtotime($auction->enddate)) }} (GMT)</p>
									</td>
									<td><p>Expired</p></td>
								</tr>
							@endforeach
							</tbody>
						</table>
					@else
						<p>You currently have no expired auctions.</p>
					@endif
				</div>

				<div class="col-md-12">
					<h3>Sold</h3>
				</div>
				<div class="col-md-12">
					@if(count($soldAuctions))
						<table class="table table-bordered">
							<thead>
							<tr>
								<th></th>
								<th>Auction details</th>
								<th>Estimated price</th>
								<th>End date</th>
								<th>Remaining time</th>
							</tr>
							</thead>
							<tbody>
							@foreach($soldAuctions as $auction)
								<tr>
									<td class="img-preview"><a href="{{ route('auctions.show', $auction->id) }}" style="background-image:url({{ $auction->image_artwork }});"><span class="overlay"><i class="fa fa-search"></i></span></a></td>
									<td>
										<h3>{{ $auction->title }}</h3>
										<p class="age">{{ $auction->year }}, {{ $auction->artist }}</p>
									</td>
									<td><h3>&euro; {{ $auction->min_price }}</h3></td>
									<td>
										<p class="date">{{ strftime('%B %d, %Y', strtotime($auction->enddate)) }}</p>
										<p class="date">{{ strftime('%H:%M', strtotime($auction->enddate)) }} (GMT)</p>
									</td>
									<td><p>Sold</p></td>
								</tr>
							@endforeach
							</tbody>
						</table>
					@else
						<p>You currently have no sold auctions.</p>
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