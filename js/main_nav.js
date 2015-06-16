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
	
/* Cabinet Switch */
	
	(function() {
		
		$('.entrance .query').click(function() {
			$('.changeRole').slideToggle();
		});
		
		setSwitch();
		
		try {
			
			$('[name="role"]').bootstrapSwitch().on('switchChange.bootstrapSwitch', function(event, state) {
				
				console.log( 'state ' + state );
			  
			  $.ajax({
				  type: 'GET',
				  url: 'ajax/change_role',
				  data: {
					  id: +state
				  },
				  success: function( data ) {
					  
					setTimeout(function() {
						$('#overlay').hide();
						$('.bubblingG').hide();
						
						document.querySelector('#page').removeChild( document.querySelector('header') );
						document.querySelector('#main').insertAdjacentHTML( 'beforeBegin', data );
						
						$.getScript('js/bootstrap-switch.js');
						get.search();
						$.getScript('js/main_nav.js');
						
						setSwitch();
						
					}, 2000);
					
					$('#overlay').show();
					$('.bubblingG').show();
					  
				  }
			  });
			  
			});
					
		} catch( e ) {
			console.log( e.type + ' : ' + e.message );
		}
		
		var get = {
			search: function() {
				$.getScript('js/perfect-scrollbar.jquery.js');
				$.getScript('js/autoComplete.js');
				$.getScript('js/main.js');
				$.getScript('js/cart.js');
			},
			searchPost: function() {
				$.post('../../../js/perfect-scrollbar.jquery.js');
				$.post('../../../js/autoComplete.js');
				$.post('../../../js/main.js');
				$.post('../../../js/cart.js');
			}
		}
		
		function setSwitch() {
			var who = $('.entrance strong').text().trim();
			
			console.log( who );
			
			if( who == 'Покупатель' ) {
				console.log( 'set Buyer' );
				
				$('.changeRole input').attr('data-on-text', 'Продавец');
				$('.changeRole input').attr('data-off-text', 'Покупатель');
				
			} else {
				console.log( 'set Seller' );
				
				$('.changeRole input').attr('data-on-text', 'Покупатель');
				$('.changeRole input').attr('data-off-text', 'Продавец');
				
			}
			
		}
		
	}());
	
	