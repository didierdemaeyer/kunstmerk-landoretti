@extends('layouts.master')

@section('title', 'Detail')

@section('content')

@include('includes/header')
@include('includes/breadcrumbs')

<div class="container">
	<div class="details">
		<div class="row">
			<div class="col-md-10">
				<h1>Dance of Time III</h1>
				<p class="top-details">25d 14u 44m  <a href="#">(7 bids) <i class="fa fa-bars"></i></a></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="col-md-12 big-image" style="background-image:url('http://lorempixel.com/400/200/');"></div>
				<div class="col-md-12 small-images">
					<div  class="small-image" style="background-image:url('http://lorempixel.com/400/200/');">
					</div>
					<div  class="small-image" style="background-image:url('http://lorempixel.com/400/200/');">
					</div>
					<div  class="small-image" style="background-image:url('http://lorempixel.com/400/200/');">
					</div>
				</div>
			</div> 
			<div class="short-details col-md-4">
				<h3>Dance of Time III</h3>
				<p class="age">1979, Salvador Dali</p>
				<hr>
				<p class="time-left">25d 14u 44m left</p>
				<p class="date">September 09, 2013, 13:00pm (EST)</p>
				<hr>
				<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi iste sunt molestiae odit. </p>
				<a class="more" href="#">more</a>
				<div class="bid-now">
					<h5>Estimated Price: </h5>
					<h3>&euro; 9.500 - 10.500</h3>
					<a class="buy-now" href="#">Buy now for &euro; 15.000</a>
					<p>bids: 7 </p>
					<div class="bid-now-sub">
						<p><input>BID NOW<i class="fa fa-angle-right"></i></p>
					</div>
					<p class="add-watchlist"><a href="#"><i class="fa fa-bars"></i>add to my watchlist</a></p>
				</div>
			</div>
		</div>
		<div class="row description-auction">
			<div class="col-md-8 description-left">
				<h6>Description</h6>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate laboriosam totam ea quos sint quaerat corrupti voluptas, harum cum enim eos inventore est doloribus distinctio nostrum. Tenetur quos commodi ipsum?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat doloribus reiciendis fuga. Neque quia voluptas, accusamus eum ullam fuga quo, a aspernatur beatae quod, in dolorum veniam consequuntur vitae omnis.</p>
				<h6>Condition</h6>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ab tempora, voluptatum totam blanditiis sed impedit nulla quisquam nemo laudantium rerum, quos neque alias officia ipsa omnis, delectus, facere consectetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati ducimus illo magnam, quidem aliquam. Tempore est, distinctio maiores neque rerum illo, libero velit possimus nemo quod suscipit. Aliquam, soluta, voluptate.</p>
			</div>
			<div class="col-md-4 description-right">
				<h6>Artist</h6>
				<p>Salvador Dali</p>
				<p>Spanish</p>
				<p>1904-1978</p>
				<h6>Dimensions</h6>
				<p>10.43 x 10.43 x 10.44cm</p>
				<h6>Color</h6>
				<p>Bronze &amp; Gold</p>
				<div>
					<p>ASK A QUESTION</p>
					<p>ABOUT THIS AUCTION</p>
				</div>
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
	</div>
</div>


@stop