@extends('layouts.master')

@section('title', 'Register')

@section('content')

	@include('includes.header')
	@include('includes.breadcrumbs')


	<div class="container">
		
		<h1>Register</h1>

		{!! Form::open(['route' => 'postRegister']) !!}

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="name">Company or name</label>
						<input type="text" name="name" class="form-control" id="name" placeholder="Company or name">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control" id="email" placeholder="name@provider.com">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control" id="password">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="password_confirmation">Password confirmation</label>
						<input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<label for="country">Country</label>
					<select class="form-group form-control" name="country" id="country">
						<option>Belgium</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="postalcode">Zip Code</label>
						<input type="text" name="postalcode" class="form-control" id="postalcode" placeholder="8400">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="city">City</label>
						<input type="text" name="city" class="form-control" id="city" placeholder="Oostende">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="address">Address</label>
						<input type="text" name="address" class="form-control" id="address" placeholder="Zuidstraat 15 C4">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="phone">Phone Number</label>
						<input type="text" name="phone" class="form-control" id="phone" placeholder="+32 XX XXX XX XX">
					</div>
				</div>
			</div>

			<div class="form-group checkbox">
				<label>
					<input type="checkbox" name="terms"> I Agree To <a href="#">The Terms &amp; Conditions</a>
				</label>
			</div>
			<button type="submit" class="btn btn-primary">Register</button>

		{!! Form::close() !!}

	</div>

@stop