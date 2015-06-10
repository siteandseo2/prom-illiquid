$( document ).ready(function() {
	
	(function() {
		
		var country = document.querySelector('[data-map="country"]').options[0].text,
			city = document.querySelector('[data-map="city"]').options[0].text,
			street = document.querySelector('[data-map="street"]').value,
			building = document.querySelector('[data-map="building"]').value;
		
		console.log( country, city, street, building );
		
		function sendToYandex() {
			
			var xhr = new XMLHttpRequest();
			xhr.open('GET', 'http://geocode-maps.yandex.ru/1.x/?geocode=' + country + ',+' + city + ',+' + street + ',+' + building, true);
			
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