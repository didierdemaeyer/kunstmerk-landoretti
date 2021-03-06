@extends('layouts.master')

@section('title', 'Home')


@section('content')
<div class="container-full">
	<header id="myCarousel" class="carousel slide">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for Slides -->
		<div class="carousel-inner">
			<div class="item active">
				<!-- Set the first background image using inline CSS below. -->
				<div class="fill" style="background-image:url('{{ asset('img/home-image.png') }}');"></div>
				<div class="carousel-caption container">
					<img class="icon-slider" src="{{ asset('img/icon-slider.png') }}" alt="decorative circle to give attention to the artwork details.">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam temporibus aperiam quia officiis a consequuntur illo voluptate non cum iste itaque, nam, eaque, velit dolore autem asperiores tempora odit fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti et hic odit tempora dolorum, corrupti, tenetur dolorem adipisci voluptate nihil laboriosam eius harum quisquam quaerat dolore numquam velit. Ipsum, fugit.</p>
				</div>
			</div>
			<div class="item">
				<!-- Set the second background image using inline CSS below. -->
				<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
				<div class="carousel-caption container">
					<img class="icon-slider" src="{{ asset('img/icon-slider.png') }}" alt="decorative circle to give attention to the artwork details.">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam temporibus aperiam quia officiis a consequuntur illo voluptate non cum iste itaque, nam, eaque, velit dolore autem asperiores tempora odit fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat facere magnam repudiandae nobis nisi ut quas est quia laboriosam fugiat fugit expedita sit reprehenderit incidunt quasi commodi illo, iusto quae!</p>
				</div>
			</div>
			<div class="item">
				<!-- Set the third background image using inline CSS below. -->
				<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
				<div class="carousel-caption container">
					<img class="icon-slider" src="{{ asset('img/icon-slider.png') }}" alt="decorative circle to give attention to the artwork details.">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam temporibus aperiam quia officiis a consequuntur illo voluptate non cum iste itaque, nam, eaque, velit dolore autem asperiores tempora odit fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero doloremque ut suscipit similique quam! Non corporis, suscipit, ipsa quos, animi dolorem totam neque eveniet odit debitis quisquam, sit vitae officiis!</p>
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<i class="fa fa-angle-right"></i>
		</a>

	</header>
</div>

<div class="container">
	<div class="row">
		<div class="info-home col-md-12">
			<h1>{{ trans('home.how-does-it-work') }}</h1>
			<div class="col-md-4">
				<img src="{{ asset('img/icon-pencil.png') }}" alt="an icon shaped as a pencil">
				<h3>{{ trans('home.sign-up') }}</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt debitis excepturi.</p>
			</div>
			<div class="col-md-4">
				<img src="{{ asset('img/icon-check.png') }}" alt="an icon shaped as a check mark">
				<h3>{{ trans('home.make-deals') }}</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt debitis excepturi.</p>
			</div>
			<div class="col-md-4">
				<img src="{{ asset('img/icon-smiley.png') }}" alt="an icon shaped as a smiley">
				<h3>{{ trans('home.everyone-happy') }}</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt debitis excepturi.</p>
			</div>
		</div>
	</div>
</div> 
<div class="section-popular">
	<div class="container">
		<div class="popular-home row">
			<h1>{{ trans('home.most-popular-this-week') }} <span><i class="fa fa-angle-down"></i></span></h1>
			<div class="col-md-12">
				@foreach($auctions as $auction)
					<a href="{{ route('auctions.show', $auction->slug) }}" class="popular-image" style="background-image:url({{ $auction->image_artwork }});"><span class="overlay"><i class="fa fa-search"></i></span></a>
				@endforeach
			</div>
		</div>
	</div>
</div>

@endsection

