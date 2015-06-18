$(function() {
	
	var path = window.location.pathname;
	
	var get = {
		search: function() {
			$.getScript('js/perfect-scrollbar.jquery.js');
			$.getScript('js/autoComplete.js');
			$.getScript('js/main.js');
			$.getScript('js/cart.js');
			$.getScript('js/ajax_select.js');
		},
		searchPost: function() {
			$.post('../../../js/perfect-scrollbar.jquery.js');
			$.post('../../../js/autoComplete.js');
			$.post('../../../js/main.js');
			$.post('../../../js/cart.js');
			$.post('../../../js/ajax_select.js');
		},
		cabinet: function() {
			$.getScript('js/bootstrap-switch.js');
			$.getScript('js/main_nav.js');
			$.getScript('js/switcher.js');
		},
		cabinetPost: function() {
			$.post('../../../js/bootstrap-switch.js');
			$.post('../../../js/main_nav.js');
			$.post('../../../js/switcher.js');
		}
	}
	
	switch( path ) {
		case '/default':
		case '/':
		
			get.search();
			get.cabinet();
			$.getScript('js/main_tabs.js');
		
			break;
		case '/login':
		case '/registration':
		
			get.search();
			get.cabinet();
			$.getScript('js/validation.js');
			$.getScript('js/ajax_select.js');
			
			break;
		case '/cabinet':
		
			get.search();
			get.cabinet();
			
			break;
		case '/add_product':
		case '/edit_item':
		
			get.search();
			get.cabinet();
			
			$.getScript('js/products.js');
		
			break;
		case '/products':
		case '/search':
		
			get.search();
			get.cabinet();
			$.getScript('js/sidebar.js');
		
			break;
		default:
		
			if( isMatch( path, '/account/' ) || isMatch( path, '/company_info/' ) || isMatch( path, '/view_company/' ) ) {
				
				get.searchPost();
				get.cabinetPost();
			
				$.post('../../../js/xml2json.js');
				$.post('../../../js/validation.js');
				$.post('../../../js/ajax_select.js');
				$.post('../../../js/maps.js');
				$.post('../../../js/product_settings.js');
				
			} else if ( isMatch( path, '/products/item/' ) ) {
				
				get.searchPost();
				
				$.post('../../../js/jquery.fancybox.pack.js');
				$.post('../../../js/product_settings.js');
				
			} else if( isMatch( path, '/products/' ) ) {
				
				get.searchPost();
				$.post('../../../js/sidebar.js');
				
			}  else if ( isMatch( path, '/subcategories/' ) ){
				
				get.searchPost();
				get.cabinetPost();
				$.post('../../../js/sidebar.js');
			} else if ( isMatch( path, '/search/' ) ) {
				
				
				get.searchPost();
				get.cabinetPost();
				$.post('../../../js/sidebar.js');
				
			}
		
			break;
	}
	
	function isMatch( path, pattern ) {
		return new RegExp( pattern, 'g' ).test( path );
	}
	
});


