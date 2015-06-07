$(function() {

	switch( window.location.pathname ) {
		case '/login':
			$.getScript('js/validation.js');
			break;
		case '/account':
			$.getScript('js/maps.js');
			$.getScript('js/xml2json.js');
			//$('body').append('<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>');
			break;
		default:
			break;
	}

}());

