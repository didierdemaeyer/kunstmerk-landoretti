@extends('layouts.master')

@section('title', 'Add a new auction')

@section('content')

	@include('includes.header')
	@include('includes.breadcrumbs')


	<div class="container">
		
		<h1>Add a new auction</h1>

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

		{!! Form::open(['route' => 'auctions.store', 'enctype' => 'multipart/form-data']) !!}

			<div class="row">
				<div class="col-md-6">
					{!! Form::select('auction_style', $auction_styles->lists('name_' . App::getLocale(), 'id'), null, ['class' => 'form-group form-control', 'id' => 'country']) !!}
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::label('title', 'Auction title') !!}
						@if ($errors->has('title'))
							{!! Form::text('title', null, ['class' => 'form-control error', 'id' => 'title', 'placeholder' => 'Auction title'])  !!}
						@else
							{!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Auction title'])  !!}
						@endif
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						{!! Form::label('year', 'Year') !!}
						@if ($errors->has('year'))
							{!! Form::text('year', null, ['class' => 'form-control error', 'id' => 'year', 'placeholder' => 'XXXX'])  !!}
						@else
							{!! Form::text('year', null, ['class' => 'form-control', 'id' => 'year', 'placeholder' => 'XXXX'])  !!}
						@endif
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						{!! Form::label('width', 'Width') !!}
						@if ($errors->has('width'))
							{!! Form::text('width', null, ['class' => 'form-control error', 'id' => 'width', 'placeholder' => 'XXXX'])  !!}
						@else
							{!! Form::text('width', null, ['class' => 'form-control', 'id' => 'width', 'placeholder' => 'XXXX'])  !!}
						@endif
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						{!! Form::label('height', 'Height') !!}
						@if ($errors->has('height'))
							{!! Form::text('height', null, ['class' => 'form-control error', 'id' => 'height', 'placeholder' => 'XXXX'])  !!}
						@else
							{!! Form::text('height', null, ['class' => 'form-control', 'id' => 'height', 'placeholder' => 'XXXX'])  !!}
						@endif
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="depth">Depth <span class="optional">(optional)</span></label>
						@if ($errors->has('depth'))
							{!! Form::text('depth', null, ['class' => 'form-control error', 'id' => 'depth', 'placeholder' => 'XXXX'])  !!}
						@else
							{!! Form::text('depth', null, ['class' => 'form-control', 'id' => 'depth', 'placeholder' => 'XXXX'])  !!}
						@endif
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-9">
					<div class="form-group">
						{!! Form::label('description_en', 'Description (English)') !!}
						@if ($errors->has('description_en'))
							{!! Form::textarea('description_en', null, ['class' => 'form-control error', 'id' => 'description_en', 'placeholder' => 'Describe your auction as thorough as possible'])  !!}
						@else
							{!! Form::textarea('description_en', null, ['class' => 'form-control', 'id' => 'description_en', 'placeholder' => 'Describe your auction as thorough as possible'])  !!}
						@endif
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-9">
					<div class="form-group">
						{!! Form::label('description_nl', 'Description (Dutch)') !!}
						@if ($errors->has('description_nl'))
							{!! Form::textarea('description_nl', null, ['class' => 'form-control error', 'id' => 'description_nl', 'placeholder' => 'Beschrijf je veiling zo grondig mogelijk'])  !!}
						@else
							{!! Form::textarea('description_nl', null, ['class' => 'form-control', 'id' => 'description_nl', 'placeholder' => 'Beschrijf je veiling zo grondig mogelijk'])  !!}
						@endif
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-9">
					<div class="form-group">
						{!! Form::label('condition_en', 'Condition (English)') !!}
						@if ($errors->has('condition_en'))
							{!! Form::textarea('condition_en', null, ['class' => 'form-control error', 'id' => 'condition_en', 'placeholder' => 'What\'s the conditon of the artwork'])  !!}
						@else
							{!! Form::textarea('condition_en', null, ['class' => 'form-control', 'id' => 'condition_en', 'placeholder' => 'What\'s the conditon of the artwork'])  !!}
						@endif
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-9">
					<div class="form-group">
						{!! Form::label('condition_nl', 'Condition (Dutch)') !!}
						@if ($errors->has('condition_nl'))
							{!! Form::textarea('condition_nl', null, ['class' => 'form-control error', 'id' => 'condition_nl', 'placeholder' => 'In welke conditie is het kunstwerk?'])  !!}
						@else
							{!! Form::textarea('condition_nl', null, ['class' => 'form-control', 'id' => 'condition_nl', 'placeholder' => 'In welke conditie is het kunstwerk?'])  !!}
						@endif
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-9">
					<div class="form-group">
						{!! Form::label('origin_en', 'Origin (English)') !!}
						@if ($errors->has('origin_en'))
							{!! Form::textarea('origin_en', null, ['class' => 'form-control error', 'id' => 'origin_en', 'placeholder' => 'What\'s the origin of the artwork?'])  !!}
						@else
							{!! Form::textarea('origin_en', null, ['class' => 'form-control', 'id' => 'origin_en', 'placeholder' => 'What\'s the origin of the artwork?'])  !!}
						@endif
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-9">
					<div class="form-group">
						{!! Form::label('origin_nl', 'Origin (Dutch)') !!}
						@if ($errors->has('origin_nl'))
							{!! Form::textarea('origin_nl', null, ['class' => 'form-control error', 'id' => 'origin_nl', 'placeholder' => 'Van welke origine is het kunstwerk?'])  !!}
						@else
							{!! Form::textarea('origin_nl', null, ['class' => 'form-control', 'id' => 'origin_nl', 'placeholder' => 'Van welke origine is het kunstwerk?'])  !!}
						@endif
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<label>Photos</label>
					<div class="form-info">
						<p>Please upload one picture with the signature of the artwork and one picture of the artwork. </p>
						<p>You can upload up to 3 pictures with a maximum of 10MB each.</p>
					</div>
				</div>

				<div class="col-md-3">
					<div class="form-group fileupload">
						<input type="file" name="image_artwork" class="filestyle" data-input="false" data-icon="false" data-buttonText="Upload image <br>of the artwork">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group fileupload">
						<input type="file" name="image_signature" class="filestyle" data-input="false" data-icon="false" data-buttonText="Upload image <br> of the signature">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group fileupload">
						<input type="file" name="image_optional" class="filestyle" data-input="false" data-icon="false" data-buttonText="Optional image">
					</div>
				</div>
			</div>


			<h2>Pricing</h2>

			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						{!! Form::label('min_price', 'Minimum estimate price') !!}
						@if ($errors->has('min_price'))
							{!! Form::text('min_price', null, ['class' => 'form-control error', 'id' => 'min_price', 'placeholder' => 'XXXX'])  !!}
						@else
							{!! Form::text('min_price', null, ['class' => 'form-control', 'id' => 'min_price', 'placeholder' => 'XXXX'])  !!}
						@endif
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						{!! Form::label('max_price', 'Maximum estimate price') !!}
						@if ($errors->has('max_price'))
							{!! Form::text('max_price', null, ['class' => 'form-control error', 'id' => 'max_price', 'placeholder' => 'XXXX'])  !!}
						@else
							{!! Form::text('max_price', null, ['class' => 'form-control', 'id' => 'max_price', 'placeholder' => 'XXXX'])  !!}
						@endif
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="buyout_price">Buyout price <span class="optional">(optional)</span></label>
						@if ($errors->has('buyout_price'))
							{!! Form::text('buyout_price', null, ['class' => 'form-control error', 'id' => 'buyout_price', 'placeholder' => 'XXXX'])  !!}
						@else
							{!! Form::text('buyout_price', null, ['class' => 'form-control', 'id' => 'buyout_price', 'placeholder' => 'XXXX'])  !!}
						@endif
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						{!! Form::label('enddate', 'End date') !!}
						@if ($errors->has('enddate'))
							{!! Form::date('enddate', null, ['class' => 'form-control error', 'id' => 'enddate', 'placeholder' => 'DD/MM/YY'])  !!}
						@else
							{!! Form::date('enddate', null, ['class' => 'form-control', 'id' => 'enddate', 'placeholder' => 'DD/MM/YY'])  !!}
						@endif
					</div>
				</div>
				<div class="col-md-6">
					<label>Attention</label>
					<div class="form-info">
						<p>You can not change the information after adding this auction.</p>
						<p>If you're not certain about the information of your artwork, please ask for help.</p>
						<p>We will answer your question as soon as possible.</p>
					</div>
				</div>
			</div>

			
			<div class="form-group checkbox{{ $errors->has('terms_and_conditions') ? ' error' : '' }}">
				<label>
					<input type="checkbox" name="terms_and_conditions"> I Agree To <a href="#">The Terms &amp; Conditions</a>
				</label>
			</div>
			<button type="submit" class="btn btn-primary">Add Auction</button>

			<div class="row">
				<div class="col-md-3 askquestion">
					<a href="#">Ask a question <i class="fa fa-angle-right"></i></a>
				</div>
			</div>

		{!! Form::close() !!}

	</div>

@stop