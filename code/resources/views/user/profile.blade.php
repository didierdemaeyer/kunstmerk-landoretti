@extends('layouts.master')

@section('title', 'Profile')

@section('content')

	@include('includes.header')
	@include('includes.breadcrumbs')


	<div class="container">
		
		<h1>Profile</h1>

		<div class="panel panel-default panel-profile">
			<div class="panel-body">
				<h2>{{ $user->name }}</h2>
				<p class="email"><i class="fa fa-envelope-o"></i> <a href="mailto:{{ $user->email }}">{{ $user->email }}</a></p>
				<p class="phone"><i class="fa fa-phone"></i> {{ $user->phone }}</p>
				
				<br>
				
				<p class="address">{{ $user->address }}</p>
				<p class="city">{{ $user->postalcode }}, {{ $user->city }}</p>
				<p class="country">{{ (App::getLocale() == 'en') ? $user->country->name_en : $user->country->name_nl }}</p>
			</div>
		</div>

		<h2>Active auctions</h2>

		<div class="row">
			<div class="col-md-12 active-auctions-slider">

				<div class="auction-preview">
					<a href="#" class="auction-image" style="background-image:url('http://lorempixel.com/400/400/');"><span class="overlay"><i class="fa fa-search"></i></span></a>

					<div class="auction-info">
						<span class="artist">1979, Salvador Dali</span>
						<span class="title">Dance of Time III</span>
						<span class="price">&euro; 8.900</span>

						<div class="call-to-action clearfix">
							<span class="timeleft">25d 14u 44m</span>

							<a href="#" class="btn btn-visit-auction">Visit Auction <i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>

				<div class="auction-preview">
					<a href="#" class="auction-image" style="background-image:url('http://lorempixel.com/400/400/');"><span class="overlay"><i class="fa fa-search"></i></span></a>

					<div class="auction-info">
						<span class="artist">1979, Salvador Dali</span>
						<span class="title">Dance of Time III</span>
						<span class="price">&euro; 8.900</span>

						<div class="call-to-action clearfix">
							<span class="timeleft">25d 14u 44m</span>

							<a href="#" class="btn btn-visit-auction">Visit Auction <i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>

				<div class="auction-preview">
					<a href="#" class="auction-image" style="background-image:url('http://lorempixel.com/400/400/');"><span class="overlay"><i class="fa fa-search"></i></span></a>

					<div class="auction-info">
						<span class="artist">1979, Salvador Dali</span>
						<span class="title">Dance of Time III</span>
						<span class="price">&euro; 8.900</span>

						<div class="call-to-action clearfix">
							<span class="timeleft">25d 14u 44m</span>

							<a href="#" class="btn btn-visit-auction">Visit Auction <i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>

				<div class="auction-preview">
					<a href="#" class="auction-image" style="background-image:url('http://lorempixel.com/400/400/');"><span class="overlay"><i class="fa fa-search"></i></span></a>

					<div class="auction-info">
						<span class="artist">1979, Salvador Dali</span>
						<span class="title">Dance of Time III</span>
						<span class="price">&euro; 8.900</span>

						<div class="call-to-action clearfix">
							<span class="timeleft">25d 14u 44m</span>

							<a href="#" class="btn btn-visit-auction">Visit Auction <i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>

				<div class="auction-preview">
					<a href="#" class="auction-image" style="background-image:url('http://lorempixel.com/400/400/');"><span class="overlay"><i class="fa fa-search"></i></span></a>

					<div class="auction-info">
						<span class="artist">1979, Salvador Dali</span>
						<span class="title">Dance of Time III</span>
						<span class="price">&euro; 8.900</span>

						<div class="call-to-action clearfix">
							<span class="timeleft">25d 14u 44m</span>

							<a href="#" class="btn btn-visit-auction">Visit Auction ></a>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>

@stop

@section('scripts')
	<script>
		(function() {
			$('.active-auctions-slider').slick({
				arrows: true,
				infinite: true,
				slidesToShow: 4,
				adaptiveHeight: true,
				prevArrow: '<div class="slider-prev"><i class="fa fa-angle-left"></i></div>',
				nextArrow: '<div class="slider-next"><i class="fa fa-angle-right"></i></div>'
			});
		})()
	</script>
@stop