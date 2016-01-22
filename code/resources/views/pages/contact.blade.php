@extends('layouts.master')

@section('title', 'Contact')

@section('content')

	@include('includes.header')

	<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Please review your question</h4>
				</div>
				<div class="modal-body">
					<p class="modal-selected-auction">Auction: <span></span></p>
					<p class="modal-your-name">Your name: <span></span></p>
					<p class="modal-your-email">Your email address: <span></span></p>
					<p>Message:</p>
					<p class="modal-message"></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button id="sendcontact" type="button" class="btn btn-primary">Send</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

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

		{!! Form::open(['route' => 'postContact', 'class' => 'contactform']) !!}

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

		<button id="submit-form" type="submit" class="btn btn-primary">Send</button>

	{!! Form::close() !!}

	</div>

@stop

@section('scripts')
	<script>

		(function ($) {
			$(".select-auction").select2();

			$('.select2-selection__arrow').replaceWith("<span class='select-arrow'><i class='fa fa-angle-down'></i></span>");


			$('#submit-form').on('click', function (e) {
				e.preventDefault();

				var auction_id = document.getElementById('auction').value,
						name = document.getElementById('name').value,
						email = document.getElementById('email').value,
						message = document.getElementById('message').value;

				if (auction_id) {
					var auction = $("#auction option[value=" + auction_id + "]").text();
					$('.modal-selected-auction').show().children().text(auction);
				}
				else {
					$('.modal-selected-auction').hide();
				}
				$('.modal-your-name span').html(name);
				$('.modal-your-email span').html(email);
				$('.modal-message').html(message);

				$('#myModal').modal();
			});

			$('#sendcontact').on('click', function (e) {
				e.preventDefault();

				$('.contactform').submit();
			})

		})(jQuery);

	</script>
@stop
