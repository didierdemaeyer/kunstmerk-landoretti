@extends('layouts.master')

@section('content')

@include('includes/header')
@include('includes/breadcrumbs')
<div class="container">
	<div class="my-watchlist">
		<div class="row">
			<div class="col-md-12">
				<h1>My watchlist</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-6">
				<a href="#" class="add-button">
					DELETE SELECTED<i class="fa fa-angle-right"></i>
				</a>
			</div>
			<div class="col-md-3">
				<a href="#" class="add-button">
					CLEAR WATCHLIST<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
		<div class="row">

			<div class="col-md-12">
				<div class="filter">
					<a class="active" href="#">all(11)</a> |
					<a href="#">active(8)</a> |
					<a href="#">ended(3)</a>
				</div>
			</div>
			<div class="col-md-12">
				<table class="table table-bordered">
					<tr>
						<th></th>
						<th></th>
						<th>Auction details</th>
						<th>Estimated price</th>
						<th>End date</th>
						<th>Remaining time</th>
					</tr>
					<tr>
						<td><input type="checkbox" name="checkbox"></td>
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
						<td><input type="checkbox"></td>
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
						<td><input type="checkbox"></td>
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
						<td><input type="checkbox"></td>
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
		</div>
	</div>
</div>
@stop