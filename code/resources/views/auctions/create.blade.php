@extends('layouts.master')

@section('title', 'Add a new auction')

@section('content')

	@include('includes.header')
	@include('includes.breadcrumbs')


	<div class="container">
		
		<h1>Add a new auction</h1>

		<form>

			<div class="row">
				<div class="col-md-6">
					<select class="form-group form-control" name="auction_style">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="title">Auction title</label>
						<input type="text" name="title" class="form-control" id="title" placeholder="Auction title">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="year">Year</label>
						<input type="text" name="year" class="form-control" id="year" placeholder="XXXX">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="width">Width</label>
						<input type="text" name="width" class="form-control" id="width" placeholder="XXXX">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="height">Height</label>
						<input type="text" name="height" class="form-control" id="height" placeholder="XXXX">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="depth">Depth <span class="optional">(optional)</span></label>
						<input type="text" name="depth" class="form-control" id="depth" placeholder="XXXX">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-9">
					<div class="form-group">
						<label for="description_en">Description (English)</label>
						<textarea name="description_en" class="form-control" id="description_en" placeholder="Describe your auction as thorough as possible"></textarea>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-9">
					<div class="form-group">
						<label for="description_nl">Description (Dutch)</label>
						<textarea name="description_nl" class="form-control" id="description_nl" placeholder="Describe your auction as thorough as possible"></textarea>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-9">
					<div class="form-group">
						<label for="condition_en">Condition (English)</label>
						<textarea name="condition_en" class="form-control" id="condition_en" placeholder="What's the condition of the artwork"></textarea>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-9">
					<div class="form-group">
						<label for="condition_nl">Condition (Dutch)</label>
						<textarea name="condition_nl" class="form-control" id="condition_nl" placeholder="What's the condition of the artwork"></textarea>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-9">
					<div class="form-group">
						<label for="origin_en">Origin (English)</label>
						<input type="text" name="origin_en" class="form-control" id="origin_en" placeholder="What's the origin of the artwork?">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-9">
					<div class="form-group">
						<label for="origin_nl">Origin (Dutch)</label>
						<input type="text" name="origin_nl" class="form-control" id="origin_nl" placeholder="What's the origin of the artwork?">
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
						<label for="min_price">Minimum estimate price</label>
						<input type="text" name="min_price" class="form-control" id="min_price" placeholder="XXXX">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="max_price">Maximum estimate price</label>
						<input type="text" name="max_price" class="form-control" id="max_price" placeholder="XXXX">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="buyout_price">Buyout price <span class="optional">(optional)</span></label>
						<input type="text" name="buyout_price" class="form-control" id="buyout_price" placeholder="XXXX">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="enddate">End date</label>
						<input type="date" name="enddate" class="form-control" id="enddate" placeholder="DD/MM/YY">
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

			
			<div class="form-group checkbox">
				<label>
					<input type="checkbox" name="terms"> I Agree To <a href="#">The Terms &amp; Conditions</a>
				</label>
			</div>
			<button type="submit" class="btn btn-primary">Add Auction</button>

			<div class="row">
				<div class="col-md-3 askquestion">
					<a href="#">Ask a question</a>
				</div>
			</div>
		</form>

	</div>

@stop