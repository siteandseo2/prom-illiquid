$( document ).ready(function() {
		
	/* Sidebar hovers */
	
	var links = $('.ajax');
	
	var whereArr = window.location.href.split('/');
	var where = whereArr[whereArr.length - 1];
	
	setActive( where );

	function setActive( where ) {
		
		[].forEach.call(links, function(link) {
			if( link.classList.contains('activeLink') ) {
				link.classList.remove('activeLink')
			}
		});
		
		[].forEach.call(links, function(link) {
			var hrefArr = link.getAttribute('href').split('/');
			if( where == hrefArr[hrefArr.length - 1] ) {
				link.classList.add('activeLink');
			}
		});
		
	}	
	
});