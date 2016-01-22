@extends('layouts.master')

@section('title', trans('navigation.searchresults'))

@section('content')

	@include('includes.header')

	{!! Breadcrumbs::render('searchresults')  !!}

	<div class="container">
		<h1>{{ trans('navigation.searchresults') }}</h1>
		<p>Search query: "{{ $searchquery }}"</p>

		@if ( ! count($search_auctions) && ! count($search_faqs))
			<br>
			<p>No results found.</p>
		@endif
	</div>

	@if(count($search_auctions))
		<div class="container">
			<div class="my-auctions">
				<div class="row">
					<div class="col-md-12">

						<h2>Results from auctions</h2>

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
							@foreach($search_auctions as $auction)
								<tr>
									<td class="img-preview">
										<a href="{{ route('auctions.show', $auction->slug) }}" style="background-image:url({{ $auction->image_artwork }});"><span class="overlay"><i class="fa fa-search"></i></span></a>
									</td>
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

					</div>
				</div>
			</div>

			<div class="container">
				<div class="pagination-container">
					{!! $search_auctions->appends(array_except(Request::query(), 'auctions'))->render() !!}
				</div>
			</div>
		</div>


	@endif

	@if (count($search_faqs))
		<div class="container faqs">
			<h2>Results in FAQs</h2>

			@foreach($search_faqs as $faq)
				<div class="row question" id="{{ $faq->id }}">
					<div class="col-md-1">
						<h3>Q</h3>
					</div>
					<div class="col-md-11">
						@if (App::getLocale() == 'en')
							<p>{{ $faq->question_en }}</p>
						@else
							<p>{{ $faq->question_nl }}</p>
						@endif
					</div>
				</div>
				<div class="row answer">
					<div class="col-md-1">
						<h3>A</h3>
					</div>
					<div class="col-md-11">
						@if (App::getLocale() == 'en')
							<p>{{ $faq->answer_en }}</p>
						@else
							<p>{{ $faq->answer_nl }}</p>
						@endif
					</div>
				</div>
			@endforeach


			{{--<p><a href="{{ route('faq') }}">All FAQs</a></p>--}}
		</div>

		<div class="container">
			<div class="pagination-container">
				{!! $search_faqs->appends(array_except(Request::query(), 'faqs'))->render() !!}
			</div>
		</div>
	@endif

@stop

@section('scripts')

	<script>

		(function ($) {
			$('a[href^="#"]').click(function () {

				$('html,body').animate({scrollTop: $(this.hash).offset().top}, 200);

				return false;

				e.preventDefault();

			});

			$.each($('.remaining-time'), function () {
				var time = $(this).data('time');
				$(this).countdown(time, function (event) {
					$(this).html(event.strftime('%-Dd %Hu %Mm'));
				});
			});
		})(jQuery);

	</script>

@stop
