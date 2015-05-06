/* Fancybox Gallery */
	
	$('.fancy').fancybox();
	
	/* Product Tabs */
	
	try {
		var prodTabs = document.querySelector('.product-tabs .tabs'),
			descrPanel = document.getElementById('description_panel'),
			addPanel = document.getElementById('add_info_panel'),
			revPanel = document.getElementById('reviews_panel');
	} catch(err) {
		console.log( err.typr + ' ' + err.message );
	}
	
	prodTabs.addEventListener('click', function(ev) {
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
		} else if( target.parentNode.className.indexOf('reviews_tab') != -1 ) {
			target.parentNode.classList.add('active');
			changeProdPanel( 'reviews_tab' );
		} else {
			return;
		}
		
		function changeProdPanel( tab ) {
			switch( tab ) {
				case 'description_tab':
					descrPanel.style.display = 'block';
					addPanel.style.display = 'none';
					revPanel.style.display = 'none';
					break;
				case 'add_info_tab':
					descrPanel.style.display = 'none';
					addPanel.style.display = 'block';
					revPanel.style.display = 'none';
					break;
				case 'reviews_tab':
					descrPanel.style.display = 'none';
					addPanel.style.display = 'none';
					revPanel.style.display = 'block';
					break;
				default:
					break;
			}
		}
		
	});
	
	/* Stars Rating */
	
	var starSpans = document.querySelectorAll('.add-review .stars span');
	[].forEach.call(starSpans, function(span) {
		span.addEventListener('mouseover', function() {
			var stars = this.children;
			for(var i = 0; i<stars.length; i++) {
				stars[i].classList.remove('fa-star-o');
				stars[i].classList.add('fa-star');
			}
		});
		
		span.addEventListener('mouseout', function() {
			var stars = this.children;
			for(var i = 0; i<stars.length; i++) {
				stars[i].classList.remove('fa-star');
				stars[i].classList.add('fa-star-o');
			}
		});
	});
	