(function($){

	

	$(document).ready(function() {

		/* ---------------------------------------------- /*
		 * Initialization General Scripts for all pages
		/* ---------------------------------------------- */

		var homeSection = $('.home-section'),
			navbar      = $('.navbar-custom'),
			navHeight   = navbar.height(),
			worksgrid   = $('#works-grid'),
			width       = Math.max($(window).width(), window.innerWidth),
			mobileTest;

		

		buildHomeSection(homeSection);
		

		$(window).resize(function() {
			var width = Math.max($(window).width(), window.innerWidth);
			buildHomeSection(homeSection);
		});

		$(window).scroll(function() {
			effectsHomeSection(homeSection, this);
			
		});

		/* ---------------------------------------------- /*
		 * Home section height
		/* ---------------------------------------------- */

		function buildHomeSection(homeSection) {
			if (homeSection.length > 0) {
				if (homeSection.hasClass('home-full-height')) {
					homeSection.height($(window).height());
				} else {
					homeSection.height($(window).height() * 0.65);
				}
			} else {
				if( $('body.home' ).length>0 && homeSection.length<1 ) {
					$('.main').css('margin-top', $('.navbar-custom').outerHeight() );
				}
			}
		}

		/* ---------------------------------------------- /*
		 * Home section effects
		/* ---------------------------------------------- */

		function effectsHomeSection(homeSection, scrollTopp) {
			if (homeSection.length > 0) {
				var homeSHeight = homeSection.height();
				var topScroll = $(document).scrollTop();
				if ((homeSection.hasClass('home-parallax')) && ($(scrollTopp).scrollTop() <= homeSHeight)) {
					homeSection.css('top', (topScroll * 0.55));
				}
				if (homeSection.hasClass('home-fade') && ($(scrollTopp).scrollTop() <= homeSHeight)) {
					var caption = $('.caption-content');
					caption.css('opacity', (1 - topScroll/homeSection.height() * 1));
				}
			}
		}

		/* ---------------------------------------------- /*
		 * Intro slider setup
		/* ---------------------------------------------- */

		if( $('.hero-slider').length > 0 ) {
			$('.hero-slider').flexslider( {
				animation: "fade",
				animationSpeed: 1000,
				animationLoop: true,
				prevText: '',
				nextText: '',
				before: function(slider) {
					$('.hs-caption').fadeOut().animate({top:'-80px'},{queue:false, easing: 'swing', duration: 700});
					slider.slides.eq(slider.currentSlide).delay(500);
					slider.slides.eq(slider.animatingTo).delay(500);
				},
				after: function(slider) {
					$('.hs-caption').fadeIn().animate({top:'0'},{queue:false, easing: 'swing', duration: 700});
				},
				useCSS: true
			});
		}

		
		
		
		

	});


})(jQuery);//


$('#myModal_next').on('show.bs.modal', function (e) {
  $('#myModal').modal('hide');
})

$('#myModal_next').on('hidden.bs.modal', function (e) {
	  $('#myModal').modal('show');

  // do something...
})