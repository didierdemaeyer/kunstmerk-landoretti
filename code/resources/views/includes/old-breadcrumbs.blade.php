<div class="breadcrumbs container">
	<p>
		<a href="{{route('home')}}">Home</a>
		<i class="fa fa-angle-right"></i>

		add $route variable for linking
		<?php $route = url('/'); ?>
		@for ($i = 0; $i <= count(Request::segments()); $i++)

			add current segment to end of route
			<?php
			// not on first route
			if ($i != 1) {
				$route .= '/';
			}
			$route .= Request::segment($i)
			?>

			<a href="{{ $route }}">{{Request::segment($i)}}</a>

			only if this segment isn't the last one
			@if ($i < count(Request::segments()) & $i > 0)
				<i class="fa fa-angle-right"></i>
			@endif
		@endfor
	</p>
</div>
