@extends('layouts.master')

@section('title', 'Art')

@section('content')

	@include('includes.header')

	<div class="sorting-container">
		<div class="container">

			<div class="basic-sort">
				<span class="sort-by">Sort by:</span> <a href="#">ending soonest</a> | <a href="#">ending latest</a> | <a href="#">new auctions</a> | <a href="#">popular auctions</a>
			</div>

			<div class="advanced-sort">
				<a id="btn-advanced-sort" href="#">Advanced Options <span class="arrow"><i class="fa fa-angle-right"></i></span></a>
			</div>

			<div class="advanced-sort-container">
				<div class="row">
					<div class="col-md-3">

						<p>Price</p>
						<ul>
							<li>Up to 5,000</li>
							<li>5,000-10,000</li>
							<li>10,000-25,000</li>
							<li>25,000-50,000</li>
							<li>50,000-100,000</li>
							<li>Above</li>
						</ul>

						<p>Ending</p>
						<ul>
							<li>Ending this Week</li>
							<li>Newly Listed</li>
							<li>Purchase Now</li>
						</ul>

					</div>

					<div class="col-md-3">

						<p>Era</p>
						<ul>
							<li>Pre-War</li>
							<li>1940s-1950s</li>
							<li>1960s-1980s</li>
							<li>1990s-Present</li>
						</ul>

						<p>Media</p>
						<ul>
							<li>Design</li>
							<li>paintings and Works on Paper</li>
							<li>Photographs</li>
							<li>Prints and Multiples</li>
							<li>Sculpture</li>
						</ul>

					</div>

					<div class="col-md-3">

						<p>Style</p>
						<ul>
							<li>Abstract</li>
							<li>African American</li>
							<li>Asian Contemporary</li>
							<li>Conceptual</li>
							<li>test</li>
							<li>test</li>
							<li>test</li>
							<li>test</li>
							<li>test</li>
							<li>test</li>
							<li>test</li>
							<li>test</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>

	@include('includes.breadcrumbs')

	<div class="art-page container">

		<div class="row">
			<div class="col-md-12">

				<div class="big-preview">
					<a href="#" class="big-image" style="background-image:url('http://lorempixel.com/400/800/');">
						<span class="overlay">
							<span class="overlay-content">
								<h2>&ldquo;Lorem ipsum dolor&rdquo;</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut distinctio labore placeat quaerat. Accusamus adipisci alias aliquam assumenda deserunt dolore dolorum illum neque nesciunt qui, quibusdam rem sequi sint. Nesciunt?</p>
							</span>
						</span>
					</a>
				</div>

				<div class="small-previews">

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

				</div>

			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
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

			</div>
		</div>

	</div>

@stop

@section('scripts')
	<script>
		(function ($) {

			$('#btn-advanced-sort').click(function (e) {
				e.preventDefault();

				$(this).find('.fa').toggleClass('fa-angle-right');
				$(this).find('.fa').toggleClass('fa-angle-down');

				$('.advanced-sort-container').toggleClass('active');
			});

		})(jQuery);
	</script>
@stop