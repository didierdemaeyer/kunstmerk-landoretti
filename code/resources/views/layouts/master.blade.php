<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <title>@yield('title') - Landoretti</title>
  <meta name="description" content="Auction website for art brand Landoretti">
  <meta name="author" content="Didier De Maeyer">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

	<header id="header">

		<div class="accent-line"></div>

		<nav id="top-navbar">
			<div class="container">
				
				<ul class="auth-links">
					<li><a href="">Register</a></li>
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
					<li><a href="">Art</a></li>
					<li><a href="">ISearch</a></li>
					<li><a href="">MyAuctions</a></li>
					<li><a href="">MyBids</a></li>
					<li><a href="">Contact</a></li>
				</ul>

				<ul class="language-select">
					<a href="/nl" class="{{ Config::get('app.locale') == 'nl' ? 'active' : '' }}">nl</a>
					<a href="/en" class="{{ Config::get('app.locale') == 'en' ? 'active' : '' }}">en</a>
				</ul>

			</div>
		</nav>

	</header>

	<div class="content container">
		@yield('content')
	</div>

	<footer>
		
		

		{{-- <div class="accent-line"></div> --}}

	</footer>

	<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="{{ asset('js/all.js') }}"></script>
</body>
</html>
