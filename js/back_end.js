$( document ).ready(function() {
		
	/* Sidebar hovers */
	
	var links = $('#sideBar a');
	
	$( links ).click(function(ev) {
		
		ev.preventDefault();
		
		var page = this.textContent;
		
		console.log( 'page ' + page );
		
		
		
		/*
		var xhr = new XMLHttpRequest();
		xhr.open('POST', 'admin_page', true);
		
		xhr.onreadystatechange = function() {
			if( xhr.readyState != 4 ) return;
			
			console.log( 'res status %s\nres text %s', xhr.status, xhr.statusText );
		}
		
		xhr.send(encodeURIComponent( page ));
		*/
		/*
		for(var i = 0; i<links.length; i++) {
			if( $( links[i] ).is( ev.target ) ) {
				sessionStorage.setItem('activeLink', i);
			}
		}		
		*/
		
	});
	
	//console.log( sessionStorage );
	
	//console.log( sessionStorage['activeLink'] );
	/*
	if( sessionStorage['activeLink'] ) {
		for(var i = 0; i<links.lenght; i++) {
			if( $( links[i] ).hasClass('activeLink') ) {
				$( links[i] ).removeClass('activeLink');
			}
		}
		
		for(var i = 0; i<links.length; i++) {
			links[ sessionStorage['activeLink'] ].parentNode.classList.add('activeLink');
		}
	} else {
		// Default
		$( links[0] ).parent().addClass('activeLink');
	}
	*/
	
	//sessionStorage.clear();
	
	//console.log( $( links[0].parentNode ) );
});