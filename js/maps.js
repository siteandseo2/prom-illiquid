$( document ).ready(function() {
	
	alert( 'maps uploaded!' );
	
	(function() {
		
		var country = document.getElementById('account_country').options[0].text,
			city = document.getElementById('account_city').options[0].text,
			address = document.getElementById('account_address').value;
		
		console.log( country, city, address );
		
		function sendToYandex() {
			
			var xhr = new XMLHttpRequest();
			xhr.open('GET', 'http://geocode-maps.yandex.ru/1.x/?geocode=' + country + ',+' + city + ',+' + address, true);
			
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
			
			var coords = json.GeoObjectCollection.featureMember.GeoObject.Point.pos;
		
			var valid = coords.split(' ');
			var center = [parseFloat( valid[1] ), parseFloat( valid[0] )];
		
			ymaps.ready(init);
			var myMap;
			
			function init() {
				myMap = new ymaps.Map('map', {
					center: center,
					zoom: 14
				});
				
				placemark = new ymaps.Placemark(center, { 
					hintContent: "Zp - center", 
					balloonContent: "Here we go!" 
				});
				
				myMap.geoObjects.add( placemark );
			}
			
		}
		
		
		
	}());
	
});