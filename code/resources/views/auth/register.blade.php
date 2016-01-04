@extends('layouts.master')

@section('title', 'Register')

@section('content')

	@include('includes.header')

	{!! Breadcrumbs::render('register')  !!}

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
					@if ($errors->has('name'))
						{!! Form::text('name', null, ['class' => 'form-control error', 'id' => 'name', 'placeholder' => 'Company or name'])  !!}
					@else
						{!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Company or name'])  !!}
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{!! Form::label('email', 'Email') !!}
					@if ($errors->has('email'))
						{!! Form::email('email', null, ['class' => 'form-control error', 'id' => 'email', 'placeholder' => 'name@provider.com'])  !!}
					@else
						{!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'name@provider.com'])  !!}
					@endif
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					{!! Form::label('password', 'Password') !!}
					@if ($errors->has('password'))
						{!! Form::password('password', ['class' => 'form-control error', 'id' => 'password'])  !!}
					@else
						{!! Form::password('password', ['class' => 'form-control', 'id' => 'password'])  !!}
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{!! Form::label('password_confirmation', 'Password confirmation') !!}
					@if ($errors->has('password_confirmation'))
						{!! Form::password('password_confirmation', ['class' => 'form-control error', 'id' => 'password_confirmation'])  !!}
					@else
						{!! Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password_confirmation'])  !!}
					@endif
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
					@if ($errors->has('postalcode'))
						{!! Form::text('postalcode', null, ['class' => 'form-control error', 'id' => 'postalcode', 'placeholder' => '8400'])  !!}
					@else
						{!! Form::text('postalcode', null, ['class' => 'form-control', 'id' => 'postalcode', 'placeholder' => '8400'])  !!}
					@endif
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					{!! Form::label('city', 'City') !!}
					@if ($errors->has('city'))
						{!! Form::text('city', null, ['class' => 'form-control error', 'id' => 'city', 'placeholder' => 'Oostende'])  !!}
					@else
						{!! Form::text('city', null, ['class' => 'form-control', 'id' => 'city', 'placeholder' => 'Oostende'])  !!}
					@endif
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					{!! Form::label('address', 'Address') !!}
					@if ($errors->has('address'))
						{!! Form::text('address', null, ['class' => 'form-control error', 'id' => 'address', 'placeholder' => 'Zuidstraat 15 C4'])  !!}
					@else
						{!! Form::text('address', null, ['class' => 'form-control', 'id' => 'address', 'placeholder' => 'Zuidstraat 15 C4'])  !!}
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{!! Form::label('phone', 'Phone number') !!}
					@if ($errors->has('phone'))
						{!! Form::text('phone', null, ['class' => 'form-control error', 'id' => 'phone', 'placeholder' => '+32 XX XXX XX XX'])  !!}
					@else
						{!! Form::text('phone', null, ['class' => 'form-control', 'id' => 'phone', 'placeholder' => '+32 XX XXX XX XX'])  !!}
					@endif
				</div>
			</div>
		</div>

		<div class="form-group checkbox{{ $errors->has('terms_and_conditions') ? ' error' : '' }}">
			<label>
				<input type="checkbox" name="terms_and_conditions"> I Agree To <a href="#">The Terms &amp; Conditions</a>
			</label>
		</div>
		<button type="submit" class="btn btn-primary">Register</button>

		{!! Form::close() !!}

	</div>

@stop