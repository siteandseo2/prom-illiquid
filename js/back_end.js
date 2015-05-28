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
	
	/* Product page filters */
	
	var prodSel = $('#_prod_cat'),
		prodSubCat = document.getElementById('_prod_subcat');
	
	$( prodSel ).change(function() {
		
		var data = $( this ).val();
		
		$.ajax({
			type: 'GET',
			url: 'products/filter_by_category',
			data: data,
			success: function( content ) {
				getSubCat( content );
			}
		});
		
	});
	
	function getSubCat( data ) {
		
		var parent = prodSubCat;
		parent.innerHTML = '';
		
		var obj = JSON.parse( data );
		
		var id = obj['id'];
		var name = obj['name'];
		
		if( !obj['name'] ) {
			return;
		}
		
		parent.removeAttribute('disabled');
		
		for(var i = 0; i<name.length; i++) {
			var option = document.createElement('option');
			option.setAttribute('value', id[i]);
			option.innerHTML = name[i];
			
			parent.appendChild( option );
		}
		
		
	}
	
});