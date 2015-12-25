@extends('layouts.master')

@section('title', 'Register')

@section('content')

	@include('includes.header')
	@include('includes.breadcrumbs')


	<div class="container">
		
		<h1>Register</h1>

		{{--Display the validation errors --}}
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		{!! Form::open(['route' => 'postRegister']) !!}

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::label('name', 'Company or name') !!}
						{!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Company or name'])  !!}
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::label('email', 'Email') !!}
						{!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'name@provider.com'])  !!}
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::label('password', 'Password') !!}
						{!! Form::password('password', ['class' => 'form-control', 'id' => 'password'])  !!}
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::label('password_confirmation', 'Password confirmation') !!}
						{!! Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password_confirmation'])  !!}
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="country">Country</label>
						{!! Form::select('country', $countries->lists('name_' . App::getLocale(), 'id'), null, ['class' => 'form-control', 'id' => 'country']) !!}
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						{!! Form::label('postalcode', 'Zip code') !!}
						{!! Form::text('postalcode', null, ['class' => 'form-control', 'id' => 'postalcode', 'placeholder' => '8400'])  !!}
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						{!! Form::label('city', 'City') !!}
						{!! Form::text('city', null, ['class' => 'form-control', 'id' => 'city', 'placeholder' => 'Oostende'])  !!}
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::label('address', 'Address') !!}
						{!! Form::text('address', null, ['class' => 'form-control', 'id' => 'address', 'placeholder' => 'Zuidstraat 15 C4'])  !!}
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::label('phone', 'Phone number') !!}
						{!! Form::text('phone', null, ['class' => 'form-control', 'id' => 'phone', 'placeholder' => '+32 XX XXX XX XX'])  !!}
					</div>
				</div>
			</div>

			<div class="form-group checkbox">
				<label>
					<input type="checkbox" name="terms_and_conditions"> I Agree To <a href="#">The Terms &amp; Conditions</a>
				</label>
			</div>
			<button type="submit" class="btn btn-primary">Register</button>

		{!! Form::close() !!}

	</div>

@stop