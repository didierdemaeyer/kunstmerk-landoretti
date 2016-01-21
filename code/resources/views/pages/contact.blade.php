@extends('layouts.master')

@section('content')

	@include('includes.header')

	{!! Breadcrumbs::render('contact')  !!}

	<div class="container faqs">

		<h1>Contact</h1>

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

		{!! Form::open(['route' => 'postContact']) !!}

		<div class="row">
			<div class="col-md-9">
				{!! Form::label('auction', 'Select and auction (if necessary)') !!}
				<select name="auction" id="auction" class="form-group form-control select-auction">
					<option value="" selected>-- select an auction --</option>
					@foreach($auctions as $auction)
						@if(isset($selected_auction) && $selected_auction->id == $auction->id)
							<option value="{{ $auction->id }}" selected>{{ $auction->title }} - {{ $auction->artist }}</option>
						@else
							<option value="{{ $auction->id }}">{{ $auction->title }} - {{ $auction->artist }}</option>
						@endif
					@endforeach
				</select>
			</div>
		</div>

		<div class="row">
			<div class="col-md-9">
				<div class="form-group">
					{!! Form::label('name', 'Your name') !!}
					@if ($errors->has('name'))
						{!! Form::text('name', null, ['class' => 'form-control error', 'id' => 'name', 'placeholder' => 'Your name'])  !!}
					@else
						{!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Your name'])  !!}
					@endif
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-9">
				<div class="form-group">
					{!! Form::label('email', 'Your email address') !!}
					@if ($errors->has('email'))
						{!! Form::text('email', null, ['class' => 'form-control error', 'id' => 'email', 'placeholder' => 'Your email address'])  !!}
					@else
						{!! Form::text('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Your email address'])  !!}
					@endif
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-9">
				<div class="form-group">
					{!! Form::label('message', 'Message') !!}
					@if ($errors->has('message'))
						{!! Form::textarea('message', null, ['class' => 'form-control error', 'id' => 'message'])  !!}
					@else
						{!! Form::textarea('message', null, ['class' => 'form-control', 'id' => 'message'])  !!}
					@endif
				</div>
			</div>
		</div>

		<button type="submit" class="btn btn-primary">Send</button>

	{!! Form::close() !!}

	</div>

@stop

@section('scripts')
	<script>

		(function ($) {
			$(".select-auction").select2();

			$('.select2-selection__arrow').replaceWith("<span class='select-arrow'><i class='fa fa-angle-down'></i></span>");

		})(jQuery);

	</script>
@stop
