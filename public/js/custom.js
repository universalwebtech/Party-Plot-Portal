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

/**/

/* navbarfix JS
============================================================== */

$(window).on("scroll", function() {
    if($(window).scrollTop() > 40) {
        $(".stick_navbar").addClass("active");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $(".stick_navbar").removeClass("active");
    }
});


/* navbarfix JS
============================================================== */

$(window).on("scroll", function() {
    if($(window).scrollTop() > 90) {
        $(".nav-bar-h").addClass("detail_sticky");
		$(".right_desc").addClass("detail_sticky");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $(".nav-bar-h").removeClass("detail_sticky");
	   $(".right_desc").removeClass("detail_sticky");
    }
});

/*Smooth scroll to div id jQuery
================================*/
$("#overview1").click(function() {
    $('html, body').animate({
        scrollTop: $("#overview").offset().top
    }, 2000);
});

$("#reviews1").click(function() {
    $('html, body').animate({
        scrollTop: $("#reviews").offset().top
    }, 2000);
});

$("#amenities1").click(function() {
    $('html, body').animate({
        scrollTop: $("#amenities").offset().top
    }, 2000);
});

$("#availability1").click(function() {
    $('html, body').animate({
        scrollTop: $("#availability").offset().top
    }, 2000);
});

$("#map1").click(function() {
    $('html, body').animate({
        scrollTop: $("#map").offset().top
    }, 2000);
});
/*function scroll_to_div(div_id)
{
 $('html,body').animate(
 {
  scrollTop: $("#"+div_id).offset().top
 },
 'slow');
}
*/

/*function scrollNav() {
  $('.detail_content a').click(function(){  
    //Toggle Class
    $(".active").removeClass("active");      
    $(this).closest('li').addClass("active");
    var theClass = $(this).attr("class");
    $('.'+theClass).parent('li').addClass('active');
    //Animate
    $('html, body').stop().animate({
        scrollTop: $( $(this).attr('href') ).offset().top - 160
    }, 400);
    return false;
  });
  $('.scrollTop a').scrollTop();
}
scrollNav();*/