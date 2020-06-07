	/**
	 * Changes nav-color on scrolling
	 */

	  (function($) {

		var myNav = document.getElementById('primary-menu');

		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
			if (document.body.scrollTop >= 200 || document.documentElement.scrollTop > 80) {
				console.log("scrolled!");
				jQuery(myNav).addClass("nav-colored");
			} else {
				console.log("not scrolled..");
				jQuery(myNav).removeClass("nav-colored");
			}
		  }

	})( jQuery );