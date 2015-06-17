$( document ).ready(function() {
	
	/* Fancybox Gallery */
	
	try {
		
		$('.fancy').click(function(ev) {
			ev.preventDefault();
			$('.fancy').fancybox();
		});
		
	} catch ( e ) {
		console.log( e.type + ' : ' + e.message );
	}
	
	/* Product Tabs */
	
	try {
		var prodTabs = document.querySelector('.product-tabs .tabs'),
			descrPanel = document.getElementById('description_panel'),
			addPanel = document.getElementById('add_info_panel');
			
			prodTabs.addEventListener('click', changeTabs);
	} catch(err) {
		console.log( err.typr + ' : ' + err.message );
	}
	
	function changeTabs(ev) {
		ev.preventDefault();
		
		[].forEach.call(prodTabs.children, function(tab) {
			tab.classList.remove('active');
		});
		
		var target = ev.target;
		
		if( target.parentNode.className.indexOf('description_tab') != -1 ) {
			target.parentNode.classList.add('active');
			changeProdPanel( 'description_tab' );
		} else if( target.parentNode.className.indexOf('add_info_tab') != -1 ) {
			target.parentNode.classList.add('active');
			changeProdPanel( 'add_info_tab' );
		} else {
			return;
		}
		
		function changeProdPanel( tab ) {
			switch( tab ) {
				case 'description_tab':
					descrPanel.style.display = 'block';
					addPanel.style.display = 'none';
					break;
				case 'add_info_tab':
					descrPanel.style.display = 'none';
					addPanel.style.display = 'block';
					break;
				case 'reviews_tab':
					descrPanel.style.display = 'none';
					addPanel.style.display = 'none';
					break;
				default:
					break;
			}
		}
	}
	
	
	/* Stars Rating */
	var	starSpans = document.querySelectorAll('.add-review .stars span'),
		inputRate = document.querySelector('[name="star_rating"]');
	
	[].forEach.call(starSpans, function(span) {
		span.addEventListener('click', function() {
			var stars = this.children;
			
			[].forEach.call(starSpans, function(span) {
				if( span.children[0].classList.contains('fa-star') ) {
					
					for(var i = 0; i<span.children.length; i++) {
						span.children[i].classList.remove('fa-star');
						span.children[i].classList.add('fa-star-o');
					}
					
				}
			});
			
			for(var i = 0; i<stars.length; i++) {
				stars[i].classList.remove('fa-star-o');
				stars[i].classList.add('fa-star');
			}
			
			var value = stars.length;
			inputRate.value = value;
			
		});
	});
	
	/* Item Quantity */
	
	(function() {
		
		var q = $('.summary .quantity').text(),
			setAmount = $('[type="number"]'),
			minOrder = $('.summary .order .q');
			
		if( q == 'Шт.' || q == 'Упаковку' ) q = 1;
		
		if( !$( minOrder ).is(':visible') ) {
			$( setAmount ).val( +q );
		} else {
			$( setAmount ).val( parseInt( $( minOrder ).text() ) );
		}
		
		if( $( setAmount ).val() != '1' ) {
			$( setAmount ).attr( 'step', $( setAmount ).val() );
			$( setAmount ).attr( 'min', $( setAmount ).val() );
		}
		
	}());
	
	
});
	