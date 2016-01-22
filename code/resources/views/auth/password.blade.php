
@extends('layouts.master')

@section('title', 'Send Password Reset Email')

@section('content')

	@include('includes.header')

	{!! Breadcrumbs::render('password.email')  !!}

	<div class="container">

		<h1>Send Password Reset Email</h1>

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

		{!! Form::open(['route' => 'password.postEmail']) !!}

			<div class="row">
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


			<div>
				<button type="submit" class="btn btn-primary">
					Send Reset Link
				</button>
			</div>

		{!! Form::close() !!}


	</div>

@stop