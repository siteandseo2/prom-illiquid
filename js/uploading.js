$(function() {
	
	var path = window.location.pathname;
	
	if( isMatch( path, '/login' ) ) {
		$.getScript('js/validation.js');
	} else if ( isMatch( path, '/account' ) ) {
		$.getScript('js/maps.js');
		$.getScript('js/xml2json.js');
	} else {
		return;
	}
	
	function isMatch( path, url ) {
		return path.indexOf( url ) != -1 ? true : false;
	}

}());

