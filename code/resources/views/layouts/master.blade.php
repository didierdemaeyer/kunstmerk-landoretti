<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <title>@yield('title') - Landoretti</title>
  <meta name="description" content="Auction website for art brand Landoretti">
  <meta name="author" content="Didier De Maeyer">
  <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->


	{{-- Styles --}}
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	@yield('links')

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

	<div class="accent-line"></div>

	@include('includes.navigation')

	<div id="content">

		@yield('content')
		
	</div>

	@include('includes.footer')

	<div class="accent-line"></div>


	{{-- Scripts --}}
	<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
  <script src="{{ asset('js/all.js') }}"></script>

  @yield('scripts')

</body>
</html>
