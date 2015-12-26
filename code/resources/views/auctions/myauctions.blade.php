@extends('layouts.master')

@section('content')

@include('includes/header')
@include('includes/breadcrumbs')



<div class="container">
	<div class="my-auctions">
		<div class="row">
			<div class="col-md-10">
				<h1>My auctions</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-9">
				<a href="{{ route('auctions.create') }}" class="add-button">ADD NEW AUCTION <i class="fa fa-angle-right"></i></a>
			</div>
		</div>
		<div class="row">

			<div class="col-md-12">
				<h3>Pending</h3>
			</div>
			<div class="col-md-12">
				<table class="table table-bordered">
					<tr>
						<th></th>
						<th>Auction details</th>
						<th>Estimated price</th>
						<th>End date</th>
						<th>Remaining time</th>
					</tr>
					<tr>
						<td class="img-preview" style="background-image:url('http://lorempixel.com/400/200/');"></td>
						<td>
							<h3>Dance of Time III</h3>
							<p class="age">1979, Salvador Dali</p>
						</td>
						<td>
							<h3>&euro; 8.900</h3>
						</td>
						<td>
							<p class="date">September 09, 2013</p>
							<p class="date">13:00 p.m. (EST)</p>
						</td>
						<td>
							<p>25d 14u 44m</p>
						</td>
					</tr>
					<tr>
						<td class="img-preview" style="background-image:url('http://lorempixel.com/400/200/');"></td>
						<td>
							<h3>Dance of Time III</h3>
							<p class="age">1979, Salvador Dali</p>
						</td>
						<td>
							<h3>&euro; 8.900</h3>
						</td>
						<td>
							<p class="date">September 09, 2013</p>
							<p class="date">13:00 p.m. (EST)</p>
						</td>
						<td>
							<p>25d 14u 44m</p>
						</td>
					</tr>
				</table>
			</div>

			<div class="col-md-12">
				<h3>Refused</h3>
			</div>
			<div class="col-md-12">
				<table class="table table-bordered">
					<tr>
						<th></th>
						<th>Auction details</th>
						<th>Estimated price</th>
						<th>End date</th>
						<th>Remaining time</th>
					</tr>
					<tr>
						<td class="img-preview" style="background-image:url('http://lorempixel.com/400/200/');"></td>
						<td>
							<h3>Dance of Time III</h3>
							<p class="age">1979, Salvador Dali</p>
						</td>
						<td>
							<h3>&euro; 8.900</h3>
						</td>
						<td>
							<p class="date">September 09, 2013</p>
							<p class="date">13:00 p.m. (EST)</p>
						</td>
						<td>
							<p>X</p>
						</td>
					</tr>
				</table>
			</div>

			<div class="col-md-12">
				<h3>Active</h3>
			</div>
			<div class="col-md-12">
				@if(count($activeAuctions))
					<table class="table table-bordered">
						<thead>
							<tr>
								<th></th>
								<th>Auction details</th>
								<th>Estimated price</th>
								<th>End date</th>
								<th>Remaining time</th>
							</tr>
						</thead>
						<tbody>
							@foreach($activeAuctions as $auction)
								<tr>
									<td class="img-preview" style="background-image:url('http://lorempixel.com/400/200/');"></td>
									<td>
										<h3>{{ $auction->title }}</h3>
										<p class="age">{{ strftime('%Y', strtotime($auction->year)) }}, Salvador Dali</p>
									</td>
									<td><h3>&euro; {{ $auction->min_price }}</h3></td>
									<td>
										<p class="date">{{ strftime('%B %d, %Y', strtotime($auction->enddate)) }}</p>
										<p class="date">{{ strftime('%H:%M', strtotime($auction->enddate)) }}</p>
									</td>
									<td><p>Tijd over</p></td>
								</tr>
							@endforeach
						</tbody>
					</table>
				@else
					<p>You currently have no active auctions. Please add a new auction or wait for approval.</p>
				@endif
			</div>

			<div class="col-md-12">
				<h3>Expired</h3>
			</div>
			<div class="col-md-12">
				<table class="table table-bordered">
					<tr>
						<th></th>
						<th>Auction details</th>
						<th>Estimated price</th>
						<th>End date</th>
						<th>Remaining time</th>
					</tr>
					<tr>
						<td class="img-preview" style="background-image:url('http://lorempixel.com/400/200/');"></td>
						<td>
							<h3>Dance of Time III</h3>
							<p class="age">1979, Salvador Dali</p>
						</td>
						<td>
							<h3>&euro; 8.900</h3>
						</td>
						<td>
							<p class="date">September 09, 2013</p>
							<p class="date">13:00 p.m. (EST)</p>
						</td>
						<td>
							<p>X</p>
						</td>
					</tr>
				</table>
			</div>

			<div class="col-md-12">
				<h3>Sold</h3>
			</div>
			<div class="col-md-12">
				<table class="table table-bordered">
					<tr>
						<th></th>
						<th>Auction details</th>
						<th>Estimated price</th>
						<th>End date</th>
						<th>Remaining time</th>
					</tr>
					<tr>
						<td class="img-preview" style="background-image:url('http://lorempixel.com/400/200/');"></td>
						<td>
							<h3>Dance of Time III</h3>
							<p class="age">1979, Salvador Dali</p>
						</td>
						<td>
							<h3>&euro; 8.900</h3>
						</td>
						<td>
							<p class="date">September 09, 2013</p>
							<p class="date">13:00 p.m. (EST)</p>
						</td>
						<td>
							<p>sold</p>
						</td>
					</tr>
					<tr>
						<td class="img-preview" style="background-image:url('http://lorempixel.com/400/200/');"></td>
						<td>
							<h3>Dance of Time III</h3>
							<p class="age">1979, Salvador Dali</p>
						</td>
						<td>
							<h3>&euro; 8.900</h3>
						</td>
						<td>
							<p class="date">September 09, 2013</p>
							<p class="date">13:00 p.m. (EST)</p>
						</td>
						<td>
							<p>sold</p>
						</td>
					</tr>
					<tr>
						<td class="img-preview" style="background-image:url('http://lorempixel.com/400/200/');"></td>
						<td>
							<h3>Dance of Time III</h3>
							<p class="age">1979, Salvador Dali</p>
						</td>
						<td>
							<h3>&euro; 8.900</h3>
						</td>
						<td>
							<p class="date">September 09, 2013</p>
							<p class="date">13:00 p.m. (EST)</p>
						</td>
						<td>
							<p>sold</p>
						</td>
					</tr>
				</table>
			</div>

		</div>
	</div>
</div>
@stop