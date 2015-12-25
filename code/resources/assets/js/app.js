(function ($) {

	// login navigation
	$('#loginbtn').click(function (e) {
		e.preventDefault();

		// hide login link
		$(this).parent().hide();

		// remove seperator between register and login
		$('.auth-links li').css('border-right', 'none');

		// show login form
		$('.loginform').addClass('visible');
	});

})(jQuery);