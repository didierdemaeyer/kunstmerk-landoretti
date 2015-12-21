<div class="footer container">
	<div class="row">
		<div class="col-md-3">
			<h4>HELP</h4>
			<a href="#">Login</a>
			<a href="{{ route('getRegister') }}">Register</a>
			<br>
			<h4>HELP</h4>
			<a href="#">Terms of Service</a>
			<a href="#">Privacy Policy</a>
			<a href="#">FAQ</a>
			<a href="#">Contact Us</a>
			<a href="#">About Us</a>
			<br>
			<h4>LANGUAGES</h4>
			<a href="/nl">Nederlands</a>
			<a href="/en">English</a>
		</div>
		<div class="col-md-3">
			<h4>STYLE</h4>
			<!-- alle styles uit DB halen -->
			<a href="#">Abstract</a>
			<a href="#">African American</a>
			<a href="#">Asian Contemporary</a>
			<a href="#">Conceptual</a>
			<a href="#">test</a>
			<a href="#">test</a>
			<a href="#">test</a>
			<a href="#">test</a>
			<a href="#">test</a>
			<a href="#">test</a>
			<a href="#">test</a>
			<a href="#">test</a>
			<br>
			<h4>STYLE</h4>
			<!-- alle categorien uit DB halen -->
			<a href="#">test</a>
			<a href="#">test</a>
			<a href="#">test</a>
			<a href="#">test</a>
			<a href="#">test</a>
		</div>
		<div class="col-md-3">
			<h4>PRICE</h4>
			<a href="#">Up to 5,000</a>
			<a href="#">5,000 - 10,000</a>
			<a href="#">10,000 - 25,000</a>
			<a href="#">25,000 - 50,000</a>
			<a href="#">50,000 - 100,000</a>
			<a href="#">Above</a>
			<br>
			<h4>ERA</h4>
			<a href="#">Pre-War</a>
			<a href="#">1940s - 1950s</a>
			<a href="#">1960s - 1980s</a>
			<a href="#">1990s - Present</a>
			<br>
			<h4>ENDINGS</h4>
			<a href="#">Ending this Week</a>
			<a href="#">Newly Listed</a>
			<a href="#">Purchase Now</a>
		</div>
		<div class="left-border col-md-3">
			<h4>FIND WHAT YOU NEED.</h4>
			<div class="search">
				<form action="">
					<input type="text" name="search" placeholder="Search" class="search-input">
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
			<h4>CONTACT</h4>
			<p>Landoretti ART</p>
			<p>Straatnaam xxx</p>
			<p>xxxx, Oostende</p>
			<br>
			<p><i class="fa fa-phone"></i> +xx (0)x xxx xx xx</p>
			<p><i class="fa fa-envelope-o"></i> <a class="email-link" href="mailto:info@landoretti.com">info&amp;landorettiart.com</a>
			<p class="social-logos">
				<img src="{{ asset('img/icon-facebook.png') }}" alt="facebook icon">
				<img src="{{ asset('img/icon-twitter.png') }}" alt="facebook icon">
				<img src="{{ asset('img/icon-youtube.png') }}" alt="facebook icon">
				<img src="{{ asset('img/icon-google.png') }}" alt="facebook icon">
			</p>
			<p class="copyright-text">&copy; 2013 Studio6, Inc. All rights reserved</p>

		</div>
	</div>
</div>
<footer id="footer">
	<nav id="main-navbar">
		<div class="container">

			<img src="{{ asset('img/logo-footer.png') }}" alt="Landoretti Art Logo" class="logo">

			<ul class="nav-links">
				<li><a href="{{ route('home') }}">Home</a></li>
				<li><a href="">Art</a></li>
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
</footer>