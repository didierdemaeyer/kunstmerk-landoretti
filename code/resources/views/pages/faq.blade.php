@extends('layouts.master')

@section('title', 'FAQ')

@section('content')

	@include('includes.header')

	{!! Breadcrumbs::render('faq')  !!}

	<div class="container faqs">
		<div class="row">
			<div class="col-md-12">
				<h1>Find what you're looking for?</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="faq-overview row">
					<?php $n = 0 ?>
					@foreach($faqs as $key => $faq)
						<?php $n++; ?>
						@if ($n%2)
							<div class="col-md-3">
						@endif

						@if (App::getLocale() == 'en')
							<a href="#{{ $faq->id }}">{{ $faq->question_en }}</a>
						@else
							<a href="#{{ $faq->id }}">{{ $faq->question_nl }}</a>
						@endif

						@if (($n+1)%2)
							</div>
						@endif

						@endforeach
					</div>
				</div>
			</div>
			@foreach($faqs as $faq)
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

		</div>

@stop

@section('scripts')

	<script>

		(function ($) {
			$('a[href^="#"]').click(function() {

				$('html,body').animate({ scrollTop: $(this.hash).offset().top}, 200);

				return false;

				e.preventDefault();

			});
		})(jQuery);

	</script>

@stop