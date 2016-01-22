
@extends('layouts.master')

@section('title', 'Reset Password')

@section('content')

	@include('includes.header')

	{!! Breadcrumbs::render('password.reset')  !!}

	<div class="container">

		<h1>Reset Password</h1>

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

		{!! Form::open(['route' => 'password.postReset']) !!}

			<input type="hidden" name="token" value="{{ $token }}">

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::label('email', 'Email') !!}
						@if ($errors->has('email'))
							{!! Form::email('email', old('email'), ['class' => 'form-control error', 'id' => 'email', 'placeholder' => 'name@provider.com'])  !!}
						@else
							{!! Form::email('email', old('email'), ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'name@provider.com'])  !!}
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
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::label('password_confirmation', 'Confirm Password') !!}
						@if ($errors->has('password_confirmation'))
							{!! Form::password('password_confirmation', ['class' => 'form-control error', 'id' => 'password_confirmation'])  !!}
						@else
							{!! Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password_confirmation'])  !!}
						@endif
					</div>
				</div>
			</div>

			<div>
				<button type="submit" class="btn btn-primary">
					Reset Password
				</button>
			</div>

		{!! Form::close() !!}


	</div>

@stop