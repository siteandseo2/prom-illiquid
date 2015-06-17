/* Cabinet Switch */
	
	$(function() {
		
		$('.entrance .query').click(function() {
			$('.changeRole').slideToggle();
		});
		
		setSwitch();
		
		try {
			
			$('[name="role"]').bootstrapSwitch({ state: true }).on('switchChange.bootstrapSwitch', function(event, state) {
				
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
						
						get.search();
						get.cabinet();
						
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
			},
			cabinet: function() {
				$.getScript('js/bootstrap-switch.js');
				$.getScript('js/main_nav.js');
				$.getScript('js/switcher.js');
			},
			cabinetPost: function() {
				$.getScript('js/bootstrap-switch.js');
				$.post('../../../js/main_nav.js');
				$.post('../../../js/switcher.js');
			}
		}
		
		function setSwitch() {
			var who = $('.entrance strong').text().trim();
			( who == 'Покупатель' ) ? $('[name="role"]').bootstrapSwitch({ state: false }) : $('[name="role"]').bootstrapSwitch({ state: true });
		}
		
	}());