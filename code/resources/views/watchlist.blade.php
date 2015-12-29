@extends('layouts.master')

@section('content')

	@include('includes/header')
	@include('includes/breadcrumbs')
	<div class="container">
		<div class="my-watchlist">
			<div class="row">
				<div class="col-md-12">
					<h1>My watchlist</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-md-offset-6">
					<a href="#" class="add-button">
						DELETE SELECTED<i class="fa fa-angle-right"></i>
					</a>
				</div>
				<div class="col-md-3">
					<a href="#" class="add-button">
						CLEAR WATCHLIST<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
			<div class="row">

				<div class="col-md-12">
					<div class="filter">
						<a class="active" href="#">all(11)</a> |
						<a href="#">active(8)</a> |
						<a href="#">ended(3)</a>
					</div>
				</div>
				<div class="col-md-12">
					@if(count($auctions))
						<table class="table table-bordered">
							<thead>
							<tr>
								<th></th>
								<th></th>
								<th>Auction details</th>
								<th>Estimated price</th>
								<th>End date</th>
								<th>Remaining time</th>
							</tr>
							</thead>
							<tbody>
							@foreach($auctions as $auction)
								<tr>
									<td><input type="checkbox" name="checkbox"></td>
									<td class="img-preview"><a href="{{ route('auctions.show', $auction->slug) }}"
									                           style="background-image:url({{ $auction->image_artwork }});"><span
													class="overlay"><i class="fa fa-search"></i></span></a></td>
									<td>
										<h3>{{ $auction->title }}</h3>
										<p class="age">{{ $auction->year }}, {{ $auction->artist }}</p>
									</td>
									<td><h3>&euro; {{ (float)$auction->min_price }}</h3></td>
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
						<p>You currently have no auctions in your watchlist.</p>
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