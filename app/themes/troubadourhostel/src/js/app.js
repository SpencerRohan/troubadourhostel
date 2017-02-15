$( document ).ready(function() {
		$('.parallax').parallax();
		$('.scroll-icon').on('click', function(e) {
	    $('html, body').animate({
	        scrollTop: $('main').offset().top - $('nav').height()
	    }, 1000);
		});
});