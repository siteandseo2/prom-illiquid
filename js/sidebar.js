$(function() {
	
	// CATEGORIES ACCORDION
		
	$('.cat-parent > a').click(function(ev) {
		ev.preventDefault();
		$( this ).next().next().slideToggle();
	});
	
	// CAROUFREDSEL
	
	$('#most-popular .carou-fred-sel').carouFredSel({
		items: 5,
		direction: "top",
		align: "center",
		height: '360px',
		margin: '0px',
		auto: {
			play: false
		},
		scroll: {
			items: 1,
			easing: "swing"
		},
		prev: {
			button: "#car_prev"
		},
		next: {
			button: "#car_next"
		}
	});
	
	$('#already-seen .carou-fred-sel').carouFredSel({
		items: 5,
		direction: "top",
		align: "center",
		height: '360px',
		margin: '0px',
		auto: {
			play: false
		},
		scroll: {
			items: 1,
			easing: "swing"
		},
		prev: {
			button: "#car_prev_"
		},
		next: {
			button: "#car_next_"
		}
	});
	
	
	$('.caroufredsel_wrapper').css('marginBottom', '0');
		
}());