(function ($) {
	"use strict";




	$(document).ready(function(){



		$(".win-region .owl-carousel").owlCarousel({
		loop: true,
		autoplay:true,
		responsive:{
			0:{
            items:1,
            nav:false
        },
        
		}
		
	});


		var owl = $('.win-region .owl-carousel');
			owl.owlCarousel();
			// Go to the next item
			$('.customNextBtn').click(function() {
			    owl.trigger('next.owl.carousel');
			})
			// Go to the previous item
			$('.customPrevBtn').click(function() {
			    // With optional speed parameter
			    // Parameters has to be in square bracket '[]'
			    owl.trigger('prev.owl.carousel', [300]);
			})

	$(".wins-aus-area .owl-carousel").owlCarousel({
		loop: true,
		nav:true,
		navText:["Prev","Next"],
		autoplay:true,
		responsive:{
			0:{
            items:1,
            nav:false
        },
        500:{
            items:2,
            nav:false
        },
        767:{
            items:3,
            nav:true
        },
		}
	});

	$('.parallax-window').parallax();


	$('#menu').css("right","-300px");
	$('.menu_icon').on('click',function(){
		if($('.menu_icon').hasClass('open')){
			$(this).removeClass('open');
			$(this).animate({
				"right":"20px",
				"background-position":"0px"
			});
			$('#menu').animate({"right":"-300px"});
			//$('body').css("position","absolute");
			$('body').animate({
				"right":"0px",
				"z-index":"999"
			});
		}
		else{
			$(this).addClass('open');
			$(this).animate({
				"right":"310px",
				"background-position":"-40px"
			});
			$('#menu').animate({"right":"0px"});
			//$('body').css("position","absolute");
			$('body').animate({
				"right":"300px",
				"z-index":"999"
			});
		
		}
	});





		
		 var shrinkHeader = 200;
		  jQuery(window).scroll(function() {
			var scroll = getCurrentScroll();
			  if ( scroll >= shrinkHeader ) {
				   jQuery('.header-top-fixed').addClass('shrink');
				}
				else {
					jQuery('.header-top-fixed').removeClass('shrink');
				}
		  });
		function getCurrentScroll() {
			return window.pageYOffset || document.documentElement.scrollTop;
			}
		
			
		var theToggle = document.getElementById('toggle');

		// hasClass
		function hasClass(elem, className) {
			return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
		}
		
		// toggleClass
		function toggleClass(elem, className) {
			var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
			if (hasClass(elem, className)) {
				while (newClass.indexOf(" " + className + " ") >= 0 ) {
					newClass = newClass.replace( " " + className + " " , " " );
				}
				elem.className = newClass.replace(/^\s+|\s+$/g, '');
			} else {
				elem.className += ' ' + className;
			}
		}

		theToggle.onclick = function() {
		   toggleClass(this, 'on');
		   return false;
		}
			
	});

}(jQuery));