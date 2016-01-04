@if (isset($breadcrumbs))
	<div class="breadcrumbs container">
		<p>
			@foreach ($breadcrumbs as $breadcrumb)
				@if (!$breadcrumb->last)
					<a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a> <i class="fa fa-angle-right"></i>
				@else
					<a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
				@endif
			@endforeach
		</p>
	</div>
@endif