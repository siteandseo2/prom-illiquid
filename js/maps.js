$( document ).ready(function() {
	
	(function() {
		
		var country = document.getElementById('account_country').options[0].text,
			city = document.getElementById('account_city').options[0].text,
			address = document.getElementById('account_address').value;
		
		console.log( country, city, address );
		
		function sendToYandex() {
			
			var xhr = new XMLHttpRequest();
			xhr.open('GET', 'http://geocode-maps.yandex.ru/1.x/?geocode=' + country + ',+' + city, true);
			
			xhr.onreadystatechange = function() {
				if( xhr.readyState != 4 ) return;
				
				if( xhr.status != 200 ) {
					console.log( xhr.status + ' ' + status.statusText );
				} else {
					callback( xhr.responseText );
				}
			}
			
			xhr.send();
			
		}
		
		sendToYandex();
		
		function callback( data ) {
			
			var json = $.xml2json( data );
			
			console.log( json );
			
			var coords = json.GeoObjectCollection.featureMember['0'].GeoObject.boundedBy.Envelope;
			
			coords.lowerCorner = parseFloat( coords.lowerCorner );
			coords.upperCorner = parseFloat( coords.upperCorner );
			
			console.log( coords.lowerCorner );
			console.log( typeof coords.lowerCorner );
			
			ymaps.ready(init);
			var myMap;
			
			function init() {
				myMap = new ymaps.Map('map', {
					center: [coords.lowerCorner, coords.upperCorner],
					zoom: 7
				});
			}
			
		}
		
		
		
	}());
	
});