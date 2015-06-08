$(function() {
	
	var path = window.location.pathname;
	
	if( path == '/login' ) {
		
		$.getScript('js/validation.js');
		
	} else {
		return;
	}
	
	function isMatch( path, url ) {
		return path.indexOf( url ) != -1 ? true : false;
	}

}());

