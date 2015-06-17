/* Tabs */
	
	$('.tabs-buttons li').click(function(ev) {
		ev.preventDefault();
		
		$( this ).parent().find('.activeTab').removeClass('activeTab');
		$( this ).addClass('activeTab');
		
		if( ev.target.tagName == 'LI' ) {
			
			var data_ajax = ev.target.getAttribute('data-ajax');
			callForAjax( data_ajax );
			
		} else if ( ev.target.tagName == 'A' ) {
			
			var data_ajax = ev.target.parentNode.getAttribute('data-ajax');
			callForAjax( data_ajax );
			
		}
	});
	

	function callForAjax( data ) {
		
		var xhr = new XMLHttpRequest();
		
		xhr.open('GET', 'change_tabs' + data, true);
		
		xhr.onreadystatechange = function() {
			if( xhr.readyState != 4 ) return;
			
			if( xhr.status != 200) {
				
				console.error( xhr.status + ' : ' + xhr.statusText );
				
			} else {
				
				var obj = JSON.parse( xhr.responseText );
				
				var names = obj['name'];
				var links = obj['link'];
				
				createCategoryList( names, links );

			}
		}
		
		xhr.send();
		
	}
	
	function createCategoryList( names, links ) {
		
		var host = 'http://' + window.location.host + '/subcategories/';
		
		try {
			var catList = document.querySelector('.tabs-content-category-list');
			catList.innerHTML = '';
			
			fill();
		} catch(err) {
			
			console.log( err.type + ' ' + err.message );
			
		}
		
		function fill() {
			
			for(var i=0; i<names.length; i++) {
				var li = document.createElement('li');
				var link = document.createElement('a');	
				
				link.innerHTML = names[i];
				link.setAttribute('href', host + links[i]);
				
				li.appendChild(link);
				catList.appendChild( li );
			}
			
		}
		
	}
	
	// Default list
	
	(function() {
		
		var firstTab = document.querySelector('#tabs-container ul li:first-child');
		callForAjax( firstTab.getAttribute('data-ajax') );
		
	}());