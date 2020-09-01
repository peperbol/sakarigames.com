$(document).ready(function(){
	$('.owl-banner').owlCarousel({
		center: true,
		items: 1,
	    loop:true,
	    margin:10,
	    nav: true,
	    dots:false,
	    autoplay:true,
	    autoplayTimeout:3000,
	    autoplayHoverPause:true,
	    responsive:{
	        600:{
	            items:2
	        }
	    }
	});

	$('.owl-projects').owlCarousel({
		center: true,
		items: 1,
	    loop:true,
	    margin:10,
	    nav: false,
	    dots:false,
	    autoplay:true,
	    autoplayTimeout:3000,
	    autoplayHoverPause:true,
	    responsive:{
	        600:{
	            items:4
	        }
	    }
	});

	$('.modal').on('hidden.bs.modal', function (e) {
	  $('video', this)[0].pause();
	})

	$('.modal').on('shown.bs.modal', function (e) {
	  $('video', this)[0].play();
	})

	// $('video').click(function(){this.paused?this.play():this.pause();});

	$('.owl-projects .owl-item').click(function(){
		$(this).siblings().removeClass('owl-info');
		$(this).toggleClass('owl-info');
	});
/*
	$('.btn-more').click(function(){
		$('.team_view').slideDown('slow');
		$('.para_collapse').height('auto');
		$(this).fadeOut('slow');
	});

	var collapse = $('.para_collapse').innerHeight();

	$('.btn-less').click(function(){
		$('.team_view').slideUp('slow');
		$('.para_collapse').height(collapse);
		$('.btn-more').fadeIn('slow');
	});
	*/

	$('.jarallax').jarallax();
})
