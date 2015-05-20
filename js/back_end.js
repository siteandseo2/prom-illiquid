$( document ).ready(function() {
		
	/* Sidebar hovers */
	
	var links = $('#sideBar a');
	
	$( links ).click(function(ev) {
		
		console.log( ev.target );
		
		//ev.preventDefault();
		
		for(var i = 0; i<links.length; i++) {
			if( $( links[i] ).is( ev.target ) ) {
				sessionStorage.setItem('activeLink', i);
			}
		}		
	
	});
	
	console.log( sessionStorage );
	
	console.log( sessionStorage['activeLink'] );
	
	if( sessionStorage['activeLink'] ) {
		for(var i = 0; i<links.lenght; i++) {
			if( $( links[i] ).hasClass('activeLink') ) {
				$( links[i] ).removeClass('activeLink');
			}
		}
		
		for(var i = 0; i<links.length; i++) {
			links[ sessionStorage['activeLink'] ].parentNode.classList.add('activeLink');
		}
	}
	
	sessionStorage.clear();
	
});