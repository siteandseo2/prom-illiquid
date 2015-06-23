$(document).ready(function() {
	
	/* Navigation dropdowns */
	
	$('#main-nav > li').hover(
		function() {
			var subNavOut = $( this ).find('.sub-nav.out-level');
			
			$( subNavOut ).css('visibility', 'visible').animate({
				opacity: .9
			}, 300);
		},
		function() {
			var subNavOut = $( this ).find('.sub-nav.out-level');
			
			$( subNavOut ).css('visibility', 'hidden').animate({
				opacity: 0
			}, 300);
		}
	);
	
	$('.downItem').hover(
		function() {
			var subNavInn = $( this ).find('.inn-level');
			
			$( subNavInn ).css('visibility', 'visible').animate({
				opacity: .9
			}, 300);
		},
		function() {
			var subNavInn = $( this ).find('.inn-level');
			
			$( subNavInn ).css('visibility', 'hidden').animate({
				opacity: 0
			}, 300);
		}
	);
	
	/* Searching dropdown */
	
	$('#location-select-button').click(searchDropDown);
	
	$('#location-select-button .sub-nav').click(function(ev) {
		
		var self = this;
		
		if( ev.target.tagName == 'SPAN' ) {
			this.previousElementSibling.previousElementSibling.previousElementSibling.innerHTML = ev.target.innerHTML;
			this.previousElementSibling.previousElementSibling.value = ev.target.innerHTML;
		} else if( ev.target.tagName == 'INPUT' ) {
			ev.stopPropagation();
		}
		
	});
	
	
	function searchDropDown() {
		var iconSpan = $( this ).find('.search-select-icon i');
		
		if( $( iconSpan ).hasClass('fa fa-angle-down') ) {
			$( iconSpan ).removeClass('fa fa-angle-down');
			$( iconSpan ).addClass('fa fa-angle-up');
		} else {
			$( iconSpan ).removeClass('fa fa-angle-up');
			$( iconSpan ).addClass('fa fa-angle-down');
		}
		
		var subNav = $( this ).find('.sub-nav');
		var helpInput = $( this ).find('[name="searchCityName"]');
		
		if( $( subNav ).css('opacity') == 0 ) {
			$( subNav ).css('visibility', 'visible');
			$( subNav ).animate({
				opacity: 1,
				top: '100%',
				width: $('#location-select-button').width() + 40 + 'px',
			}, 300);
			
			$( helpInput ).val('');
			
			if( $( this ).has('.promptDiv') ) {
				$( this ).find('.promptDiv').remove();
			}
			
		} else {
			$( subNav ).animate({
				opacity: 0,
				top: '110%',
			}, 300, function() {
				$( this ).css('visibility', 'hidden');
			});
		}
		
	}
	
	/* Fill in search dropdown */
	
	var cities = ['Винница', 'Луцк', 'Днепропетровск', 'Житомир', 'Ужгород', 'Запорожье',
	'Ивано-Франковск', 'Киев', 'Кировоград', 'Львов', 'Николаев', 'Одесса', 'Полтава',
	'Ровно', 'Сумы', 'Тернополь', 'Харьков', 'Херсон', 'Черкассы', 'Чернигов', 'Черновцы'
	];
	
	/* Autocomplete */
	
	try {
		var search = document.getElementsByName('searchCityName')[0];
		autoComplete(search, cities);
	} catch(e) {
		console.warn( 'name : %s, message : %s', e.name, e.message );
	}
	
	//
	
	function fillInSearchDropDown() {
		
		try {
			var dropDownUl = document.querySelector('#location-select-button .sub-nav ul');
			dropDownUl.innerHTML = '';
			
			fill();
		} catch(e) {
			console.warn( 'name : %s, message : %s', e.name, e.message );
		}
		
		function fill() {
			for(var i=0; i<cities.length; i++) {
				var li = document.createElement('li');
				
				var a = document.createElement('a');
				a.setAttribute('href', '#');
				
				var span = document.createElement('span');
				span.innerHTML = cities[i];
				
				a.appendChild(span);
				li.appendChild(a);
				
				dropDownUl.appendChild(li);
			}
		}
		
	};
	
	fillInSearchDropDown();
	
	/* Perfect scrollbar */
	
	(function() {
		
		//console.log( navigator.userAgent );
		
		$('#location-select-button .sub-nav ul').perfectScrollbar();
		//$('#location-select-button .sub-nav .scrollbar-inner').scrollbar();
		
	}());
	
	/* Accordion */
	try {
		$('.foot-accordion').accordion({
			collapsible: true
		});
	} catch( e ) {
		console.warn( 'name : %s, message : %s', e.name, e.message );
	}
	
	// Styles
	
	$('.accor-content, .accor-link').css({
		'background': 'transparent',
		'border': 0
	});
	
	$('.ui-accordion-header-icon').remove();
	
	// Arrow
	
	$('.foot-accordion a').click(function(ev) {
		ev.preventDefault();
		
		if ( $( this ).find('.accor-toggle-icon i').hasClass('fa fa-angle-down') ) {
			
			$( this ).find('.accor-toggle-icon i').removeClass('fa fa-angle-down');
			$( this ).find('.accor-toggle-icon i').addClass('fa fa-angle-up');
			
		} else {
			
			$( this ).find('.accor-toggle-icon i').removeClass('fa fa-angle-up');
			$( this ).find('.accor-toggle-icon i').addClass('fa fa-angle-down');
			
		}
	});
	
	/* Arrow Up */
	
	var arrow = document.querySelector('.scroll-top');
	
	window.addEventListener('scroll', function() {
		if( window.pageYOffset > 250 ) {
			arrow.classList.add('scroll-on');
		} else {
			arrow.classList.remove('scroll-on');
		}	
	});
	
	arrow.addEventListener('click', function(ev) {
		ev.preventDefault();
		
		var top = setInterval(function() {
			if ( window.pageYOffset > 0 ) {
				document.body.scrollTop ? document.body.scrollTop -= 20 : document.documentElement.scrollTop -= 20;
			} else {
				clearInterval( top );
			}
		}, 10);
	});
	
	/* Edit Item. Sortable */
	
	$(function() {
		try {
			$('.sortable').sortable();
		} catch( e ) {
			console.warn( 'name : %s, message : %s', e.name, e.message );
		} 
	});
	
	/* Pagination */
	
	(function() {
		var links = document.querySelectorAll('.cat-row > .pagination > a'),
			current = document.querySelector('.cat-row > .pagination > strong'),
			pagination = document.querySelector('.pagination');
		
		try {
			if( current ) {
				var def = Lia('#', current.innerHTML, false);
				pagination.replaceChild(def, current);
				go();
			}
		} catch( e ) {
			console.warn( 'name : %s, message : %s', e.name, e.message );
		}
		
		function Lia(href, text, bool) {
			var li = document.createElement('li');
			if( !bool ) li.className = 'active';
			var a = document.createElement('a');
			a.innerHTML = text;
			a.setAttribute('href', href);
			li.appendChild(a);
			return li;
		}
		
		function go() {
			for(var i = 0; i<links.length; i++) {
				var li = Lia(links[i].getAttribute('href'), links[i].innerHTML, true);
				pagination.replaceChild(li, links[i]);
			}
		}
	}());
	
	
	/* Triming Product Names */
	
	(function() {
		var carousels = $('.marketing-carousel'),
			catItems = $('.cat-content-row-item'),
			sidebarCarousels = $('.widget-top-rated');
			
		try {
			if( carousels.length ) trimTitle( carousels, 25 );
			if( catItems.length ) trimTitle( catItems, 40 );
			if( sidebarCarousels.length ) trimTitle( sidebarCarousels, 22 );
		} catch( e ) {
			console.warn( 'name : %s, message : %s', e.name, e.message );
		}
		
		function trimTitle( itemsList, maxlength ) {
			
			[].forEach.call(itemsList, function( item ) {
				var titles = $( item ).find('.product-title');
				[].forEach.call(titles, function(title) {
					var text = $( title ).text().trim();
					if( text.length > maxlength ) $( title ).text( text.slice(0, maxlength) + '..' );
				});
			});
		
		}
		
	})();
	
});