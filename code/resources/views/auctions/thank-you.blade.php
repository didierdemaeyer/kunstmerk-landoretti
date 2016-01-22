@extends('layouts.master')

@section('title', 'Thank you')

@section('content')

	@include('includes/header')

	{!! Breadcrumbs::render('art.thank-you', $auction) !!}

	<div class="container">
		<h1>Thank you</h1>
		<p>Thank you for buying {{ $auction->title }}.</p>
	</div>
@stop

