$( document ).ready(function() {
		
	/* Sidebar hovers */
	
	var links = $('#sideBar a');
	
	var whereArr = window.location.href.split('/');
	var where = whereArr[whereArr.length - 1];
	
	setActive( where );

	function setActive( where ) {
		
		clear();
		
		[].forEach.call(links, function(link) {
			var hrefArr = link.getAttribute('href').split('/');
			
			if( where == hrefArr[hrefArr.length - 1] ) {
				link.classList.add('activeLink');
				collapse( link );
			}
		});
	}	
	
	function clear() {
		[].forEach.call(links, function(link) {
			if( link.classList.contains('activeLink') ) {
				link.classList.remove('activeLink')
			}
		});
	}
	
	function collapse( link ) {
		
		if( link.classList.contains('dropped') ) {
			var ul = link.parentNode.parentNode;
			var a = ul.previousElementSibling;
			
			ul.classList.add('in');
			ul.setAttribute('aria-expanded', true);
			a.setAttribute('aria-expanded', true);
		}
		
	}
	
	$('#sideBar').click(function(ev) {
		if( ev.target.tagName == 'A' ) clear();
	});
	
	/* AJAX IN COMMON */
	
	try {
		
		var firstSelect = $('.ajax-first-select'),
			secondSelect = $('.ajax-second-select'),
			page = window.location.pathname;
	
		$( firstSelect ).change(function() {
			
			var data = $( this ).val();
			
			if( data == 'default' ) {
				return;
			}
			
			data = 'id=' + data;
			
			switch( page ){
				case '/admin/products':
					callAjax( 'products/filter_by_category', data );
					break;
				case '/admin/menu_add':
					callAjax( 'ajax/add_menu_item', data );
					break;
				default:
					break;
			}

		});
		
	} catch( e ) {
		
		console.log( e.type + ' ' + e.message );
		
	}
	
	function callAjax( url, data ) {
		console.log( url, data );
		
		$.ajax({
			type: 'GET',
			url: url,
			data: data,
			success: function( content ) {
				getSubCat( content, secondSelect );
			}
		});
	}
	
	
	function getSubCat( data, parent ) {
		
		$( parent ).html('');
		
		var obj = JSON.parse( data );
		
		console.log( obj );
		
		var id = obj['link'];
		var name = obj['name'];
		
		if( !obj['name'] ) {
			return;
		}
		
		parent.removeAttr('disabled');
		
		for(var i = 0; i<name.length; i++) {
			var option = document.createElement('option');
			option.setAttribute('value', id[i]);
			option.innerHTML = name[i];
			
			$( parent ).append( option );
		}
		
	}	
	
});