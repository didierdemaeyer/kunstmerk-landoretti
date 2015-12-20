@extends('layouts.master')

@section('title', 'Profile')

@section('content')

	@include('includes.header')
	@include('includes.breadcrumbs')


	<div class="container">
		
		<h1>Profile</h1>

		<div class="panel panel-default panel-profile">
			<div class="panel-body">
				<h2>Jasper Poppe</h2>
				<p class="email"><i class="fa fa-envelope-o"></i> <a href="mailto:jasper@email.be">jasper&#64;email.be</a></p>
				<p class="phone"><i class="fa fa-phone"></i> +xx (0)x xxx xx xx</p>
				
				<br>
				
				<p class="address">Straatnaam xxx</p>
				<p class="city">xxxx, Oostende</p>
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

							<a href="#" class="btn btn-visit-auction">Visit Auction ></a>
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
				prevArrow: '<div class="slider-prev"><i class="fa fa-chevron-left"></i></div>',
				nextArrow: '<div class="slider-next"><i class="fa fa-chevron-right"></i></div>'
			});
		})()
	</script>
@stop