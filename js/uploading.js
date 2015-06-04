$(function() {

	switch( window.location.pathname ) {
		case '/login':
			$.getScript('js/validation.js');
			break;
		default:
			break;
	}

}());

