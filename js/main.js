
"use strict";
$(document).ready(function() {

    function makeTimer() {
        var endTime = new Date("may 21, 2025 00:00:00");
        var endTime = (Date.parse(endTime)) / 1000;
        var now = new Date();
        var now = (Date.parse(now) / 1000);
        var timeLeft = endTime - now;
        var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
        var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
        var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
        if (hours < "10") { hours = "0" + hours; }
        if (minutes < "10") { minutes = "0" + minutes; }
        if (seconds < "10") { seconds = "0" + seconds; }
        $("#days").html(days + "<span>Gün</span>");
        $("#hours").html(hours + "<span>Saat</span>");
        $("#minutes").html(minutes + "<span>Dakika</span>");
        $("#seconds").html(seconds + "<span>Saniye</span>");
    }
    setInterval(function() { makeTimer(); }, 0);

    //Smooth Scroll 
	
    $('.page-scroll a').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 2500, 'easeInOutExpo');
        event.preventDefault();
    });
		

    //	Back Top Link

    var offset = 200;
    var duration = 500;
	var backtotop = $('.back-to-top');
    $(window).scroll(function() {
        if ($(this).scrollTop() > offset) {
            backtotop.fadeIn(400);
        } else {
            backtotop.fadeOut(400);
        }
    });

    //Owl-carousels
   
	$("#blog-slider").owlCarousel({
        dots: true,
        loop:true,
		margin: 10,
        autoplay: false,
        nav: true,
		  navText: [
            "<i class='flaticon-arrows-1'></i>",
            "<i class='flaticon-arrows'></i>"

        ],
        responsive: {
            1: {
                items: 1,
            },
			1200: {
                items: 3,
            },
        }
    });
	$("#team-slider").owlCarousel({
        dots: true,
		loop:true,
		margin: 50,
        nav: true,
		  navText: [
            "<i class='flaticon-arrows-1'></i>",
            "<i class='flaticon-arrows'></i>"

        ],
        responsive: {
            1: {
                items: 1,
            },
			 600: {
                items: 2,
            },
			900: {
                items: 3,
            },
        }
    });
	 $("#services-slider").owlCarousel({
        dots: true,
        loop:true,
		margin: 30,
        autoplay: false,
        nav: true,
		  navText: [
            "<i class='flaticon-arrows-1'></i>",
            "<i class='flaticon-arrows'></i>"

        ],
        responsive: {
            1: {
                items: 1,
            },
			767: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        }
    });
	$("#featured-icons").owlCarousel({
        dots: true,
        loop:true,
		margin: 50,
        autoplay: true,     
        responsive: {
            1: {
                items: 1,
            },
			600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        }
    });
	$("#testimonial-slider").owlCarousel({
        loop:true,
		dots: true,
        autoplay: 3000, // time for slides changes

        responsive: {
            1: {
                items: 1,
            },
			767: {
                items: 2,
            },		
        }
    });
	  
   //Load Skrollr

	var skr0llr = skrollr.init({
		forceHeight: false,
		mobileCheck: function() {
			//hack - forces mobile version to be off
			return false;
		}
	});		


	//Dropdown nav on Hover

    if ( $(window).width() > 991) {  
	 var dropmenu = $('.dropdown-menu');
		$('.dropdown').hover(function() {
		  $(this).find( dropmenu ).stop(true, true).delay(100).fadeIn(500);
		}, function() {
		  $(this).find( dropmenu ).stop(true, true).delay(100).fadeOut(500);
		});
	}

  		
}); // end document ready


//On Click  function
	$(document).on('click',function(){
		
		//Navbar toggle
		$('.navbar .collapse').collapse('hide');
		
	})	

// Window load function

$(window).load(function() {

    // Page Preloader 	

    $("#preloader").slideUp("slow");
	
    // Pretty Photo

    $("a[data-gal^='prettyPhoto']").prettyPhoto({
        hook: 'data-gal'
    });
    ({
        animation_speed: 'normal',
        opacity: 1,
        show_title: true,
        allow_resize: true,
        counter_separator_label: '/',
        theme: 'light_square',
        /* light_rounded / dark_rounded / light_square / dark_square / facebook */
    });	
			
    //Isotope Nav Filter

    $('.category a').on('click', function() {
        $('.category .active').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        return false;
    });
		
    //Isotope 

    var $container = $('#lightbox');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false,
            layoutMode: 'masonry'
        }

    });
	$(window).smartresize(function() {
        $container.isotope({
            columnWidth: '.col-sm-3'
        });
    });

    //IE 11 Fix for shaky backgrounds
	
	 if(/MSIE \d|Trident.*rv:/.test(navigator.userAgent) || (/Edge\/\d./i.test(navigator.userAgent)))
		$('body').on("mousewheel", function() {
			event.preventDefault();

			var wheelDelta = event.wheelDelta;

			var currentScrollPosition = window.pageYOffset;
			window.scrollTo(0, currentScrollPosition - wheelDelta);
		});

}); // end window load
