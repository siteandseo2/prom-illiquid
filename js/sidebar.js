$(function() {
	// CATEGORIES ACCORDION
		
	$('.cat-parent > a').click(function(ev) {
		ev.preventDefault();
		$( this ).next().next().slideToggle();
	});
		
}());