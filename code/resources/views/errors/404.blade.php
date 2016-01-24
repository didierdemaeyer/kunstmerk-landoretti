<!DOCTYPE html>
<html>
<head>
	<title>Page not found.</title>

	<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

	<style>
		html, body {
			height: 100%;
		}

		body {
			margin: 0;
			padding: 0;
			width: 100%;
			color: #B0BEC5;
			display: table;
			font-weight: 100;
			font-family: 'Lato';
		}

		.container {
			text-align: center;
			display: table-cell;
			vertical-align: middle;
		}

		.content {
			text-align: center;
			display: inline-block;
		}

		.title {
			font-size: 72px;
			margin-bottom: 40px;
		}

		.redirect {
			font-size: 40px;
		}

		a {
			color: rgb(117, 142, 154);
		}
	</style>
</head>
<body>
<div class="container">
	<div class="content">
		<div class="title">Page not found.</div>
		<div class="redirect">Go back to the <a href="{{ route('home') }}">Homepage</a></div>
	</div>
</div>
</body>
</html>
