<nav id="top-navbar">
	<div class="container">

		@if ( Auth::check() )
			<ul class="auth-links">
				<li><a href="{{ route('watchlist') }}"><i class="fa fa-bars"></i> Watchlist</a></li>
				<li><a href="{{ route('profile') }}"><i class="fa fa-user"></i> Profile</a></li>
				<li><a href="{{ route('getLogout') }}">Logout</a></li>
			</ul>
		@else
			<ul class="auth-links">
				<li><a href="{{ route('getRegister') }}">Register</a></li>
				<li><a href="#" id="loginbtn">Login</a></li>
			</ul>
		@endif

		<div class="loginform">
			{!! Form::open(['route' => 'postLogin']) !!}
				{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
				{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
				<button type="submit"><i class="fa fa-angle-right"></i></button>
			{!! Form::close() !!}
		</div>

		<div class="search">
			<form action="">
				<input type="text" name="search" placeholder="Search" class="search-input">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>

	</div>
</nav>

<nav id="main-navbar">
	<div class="container">

		<img src="{{ asset('img/logo.jpg') }}" alt="Landoretti Art Logo" class="logo">

		<ul class="nav-links">
			<li><a href="{{ route('home') }}">Home</a></li>
			<li><a href="{{ route('auctions.overview') }}">Art</a></li>
			@if (Auth::check())
				<li><a href="{{ route('auctions.myauctions') }}">MyAuctions</a></li>
				<li><a href="{{ route('mybids') }}">MyBids</a></li>
			@endif
			<li><a href="{{ route('faq') }}">FAQ</a></li>
			<li><a href="{{ route('getContact') }}">Contact</a></li>
		</ul>

		<ul class="language-select">
			<li><a href="/nl" class="{{ Config::get('app.locale') == 'nl' ? 'active' : '' }}">nl</a></li>
			<li><a href="/en" class="{{ Config::get('app.locale') == 'en' ? 'active' : '' }}">en</a></li>
		</ul>

	</div>
</nav>