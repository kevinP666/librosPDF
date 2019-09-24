$(document).ready(function() {
	// Start functins
	config_owl_slider_heading();
	config_owl_slider_most_prominent();
	config_owl_slider_category();
	config_owl_slider_related();

});

function config_owl_slider_heading() {
	/* Carousel slider heading */
	$('.owl-slider-heading').owlCarousel({
		items: 1,
		dots: false,
		loop: true,
		margin: 10
	});

	var owl = $('.owl-slider-heading');
	owl.owlCarousel();
	// Go to the next item
	$('.customNextBtn').click(function() {
	    owl.trigger('next.owl.carousel', [1000]);
	});
	// Go to the previous item
	$('.customPrevBtn').click(function() {
	    // With optional speed parameter
	    // Parameters has to be in square bracket '[]'
	    owl.trigger('prev.owl.carousel', [1000]);
	});
}

function config_owl_slider_most_prominent() {
	/* Carousel slider most prominent */
	$('.owl-slider-most-prominent').owlCarousel({
		items: 4,
		nav: true,
		loop: true,
		dots: false,
		margin: 10,
		autoplay:true,
		autoplayTimeout:2000,
		autoplayHoverPause:true,
		responsiveClass: true,
		responsive : {
		     0:{
	            items:1,
	            nav:true
	        },
	        440:{
	            items:2,
	            nav:true
	        },
	        767:{
	            items:3
	        },
	        1000:{
	            items:4,
	            loop:true
	        }
		}
	});
}

function config_owl_slider_category() {
	/* Carousel slider category */
	$('.owl-slider-category').owlCarousel({
		items: 4,
		nav: false,
		dots: false, 
		loop: true,
		margin: 10,
		autoplay:true,
		autoplayTimeout:1000,
		autoplayHoverPause:true,
		responsiveClass: true,
		responsive : {
		     0:{
	            items:1,
	            nav:true
	        },
	        440:{
	            items:2,
	            nav:true
	        },
	        767:{
	            items:3,
	            nav:false
	        },
	        1000:{
	            items:4,
	            nav:true,
	            loop:true
	        }
		}
	});
}

function config_owl_slider_related() {
	/* Carousel slider related */
	$('.owl-slider-related').owlCarousel({
		items: 3,
		nav: true,
		dots: false, 
		loop: true,
		margin: 10,
		responsiveClass: true,
		responsive : {
		     0:{
	            items:1,
	            nav:true
	        },
	        440:{
	            items:2,
	            nav:true
	        },
	        767:{
	            items:3,
	            nav:false
	        },
	        1000:{
	            items:3,
	            nav:true,
	            loop:true
	        }
		}
	});
}