<nav id="top-navbar">
	<div class="container">
		
		<ul class="auth-links">
			<li><a href="{{ route('getRegister') }}">Register</a></li>
			<li><a href="">Login</a></li>
		</ul>

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
			<li><a href="">ISearch</a></li>
			<li><a href="">MyAuctions</a></li>
			<li><a href="">MyBids</a></li>
			<li><a href="">Contact</a></li>
		</ul>

		<ul class="language-select">
			<li><a href="/nl" class="{{ Config::get('app.locale') == 'nl' ? 'active' : '' }}">nl</a></li>
			<li><a href="/en" class="{{ Config::get('app.locale') == 'en' ? 'active' : '' }}">en</a></li>
		</ul>

	</div>
</nav>