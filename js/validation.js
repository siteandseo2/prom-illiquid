﻿/* ----------------------------------------------------------
						VALIDATION
 ------------------------------------------------------------*/
 
 $( document ).ready(function() {
	 
	// Define variables
	
	var form = document.querySelector('.validate-form'),
		inputSubmit = document.querySelector('.validate-submit'),
		tabs = document.querySelector('.validate-form-tabs');
		required = document.querySelectorAll('.validate');
		
	(function() {
		[].forEach.call(required, function(input) {
			$( input ).parent().tooltip({ 
				placement: 'right',
				title: 'Обязательное поле'
			});
		});
	}());
	
	var namePattern = /[^a-zA-Zа-яА-Я\s]/gi,
		passwordPattern = /[^a-zA-Zа-яА-Я0-9]/gi,
		phonePattetn = /[^\+\d+\s+]/g,
		emailPattern = /\w+\@\w+\.\w+/;
		
	// Content management
	
	try {
		
		tabs.addEventListener('click', function(ev) {
			var target = ev.target
			if( target.tagName != 'LABEL' ) return;
			
			changeSet( target.firstElementChild.id );
		});
		
	} catch( e ) {
		
		console.log( e.type + ' : ' + e.message );
		
	}
	
	function changeSet( who ) {
		var persEmail = $('[name="email"]').parent();
			persPhone = $('[name="phone"]').parent(),
			persCountry = $('[name="country"]').parent(),
			persCity = $('[name="city"]').parent(),
			persStreet = $('[name="street"]').parent(),
			persBuilding = $('[name="building"]').parent();
		
		if( who == 'seller' ) {
			$('.seller-set').css('display', 'block');
			$( persEmail ).css('display', 'none');
			$( persPhone ).css('display', 'none');
			$( persCountry ).css('display', 'none');
			$( persCity ).css('display', 'none');
			$( persStreet ).css('display', 'none');
			$( persBuilding ).css('display', 'none');
		} else {
			$('.seller-set').css('display', 'none');
			$( persEmail ).css('display', 'block');
			$( persPhone ).css('display', 'block');
			$( persCountry ).css('display', 'block');
			$( persCity ).css('display', 'block');
			$( persStreet ).css('display', 'block');
			$( persBuilding ).css('display', 'block');
		}
	}
	
	// Validation
			
	try {
		
		[].forEach.call(required, function (input) {
			input.addEventListener('blur', function() {
				validate(this, this.value);
			});
		});
		
	} catch (e) {

		console.log( e.type + ' : ' + e.message );
		
	}

	function validate(self, str, pattern) {
		
		var data_validate = $( self ).attr('data-validate');
		
		switch( data_validate ) {
			case 'w':
				// /[^a-zA-Zа-яА-Я\s]/gi, words only
			
				!namePattern.test(str) && self.value.length ? lightAccept() : lightDenied();
				
				break;
			case 'e':
				// /\w+\@\w+\.\w+/; email
			
				emailPattern.test(str) && self.value.length ? lightAccept() : lightDenied();
				
				break;
			case 'p':
				
				!phonePattetn.test(str) && self.value.length ? lightAccept() : lightDenied();
				
				break;
			case 'wn':
				// /[^a-zA-Zа-яА-Я0-9]/gi, words and numbers
			
				!passwordPattern.test(str) && self.value.length >= 8 ? lightAccept() : lightDenied();
				
				break;
			case 'any':
				// any 
			
				self.value.length ? lightAccept() : lightDenied();
				
				break;
			case 're':
				// check repeat
				
				var origin = $('[name="password"]').val();
				
				self.value.length && isSimilar( origin, self.value ) ? lightAccept() : lightDenied();
				
				break;
			default:
				break;
				
		}
		
		function isSimilar( origin, repeat ) {
			return origin == repeat ? true : false;
		}

		function lightAccept() {
			// true
			if (self.classList.contains('validateInputFalse')) {
				self.classList.remove('validateInputFalse');
			}

			if (!self.classList.contains('validateInputTrue')) {
				self.classList.add('validateInputTrue');
			}

			if (self.nextElementSibling.classList.contains('validateIconFalse')) {
				self.nextElementSibling.classList.remove('validateIconFalse');
			}

			if (!self.nextElementSibling.classList.contains('validateIconTrue')) {
				self.nextElementSibling.classList.add('validateIconTrue');
			}

			if (self.nextElementSibling.children[0].classList.contains('fa-times')) {
				self.nextElementSibling.children[0].classList.remove('fa-times');
			}

			if (!self.nextElementSibling.children[0].classList.contains('fa-check')) {
				self.nextElementSibling.children[0].classList.add('fa-check');
			}

		}

		function lightDenied() {
			// false
			if (self.classList.contains('validateInputTrue')) {
				self.classList.remove('validateInputTrue');
			}

			if (!self.classList.contains('validateInputFalse')) {
				self.classList.add('validateInputFalse');
			}

			if (self.nextElementSibling.classList.contains('validateIconTrue')) {
				self.nextElementSibling.classList.remove('validateIconTrue');
			}

			if (!self.nextElementSibling.classList.contains('validateIconFalse')) {
				self.nextElementSibling.classList.add('validateIconFalse')
			}

			if (self.nextElementSibling.children[0].classList.contains('fa-check')) {
				self.nextElementSibling.children[0].classList.remove('fa-check');
			}

			if (!self.nextElementSibling.children[0].classList.contains('fa-times')) {
				self.nextElementSibling.children[0].classList.add('fa-times');
			}

		}

	};

	
	try {
		inputSubmit.addEventListener('click', sendSubmit);
	} catch( e ) {
		console.log( e.type + ' : ' + e.message );
	}
	
	function sendSubmit() {
		[].forEach.call(required, function (input) {
			validate(input, input.value);
		});

		var isAnyFalse = [].some.call(required, function(input) {
			
			if( $( input ).is(':visible') ) {
				return input.classList.contains('validateInputFalse');
			}
			
		});

		if ( isAnyFalse ) {
			form.onsubmit = function () {
				return false;
			}
		} else {
			
			switch( window.location.pathname ) {
				case '/registration':
					doAjax( 'user/add_user' );
					break;
				case '/login':
					doAjax( 'user/get_user' );
					break;
				default:
					break;
			}
	
		}

	}

	/* ----------------------------------------------------
							AJAX
	 ------------------------------------------------------ */

	function doAjax( url ) {

		var data = new FormData(form);

		var xhr = new XMLHttpRequest();
		xhr.open('POST', url, true);

		xhr.onreadystatechange = function () {
			if (xhr.readyState != 4) return;

			if ( xhr.status == 200 && url == 'user/add_user' ) {
				
				setTimeout(function() {
					callback( true );
				}, 1000);
				
			} else {
				
				console.error(xhr.status + ' : ' + xhr.statusText);
				
				if( url == 'user/add_user' ) {
					setTimeout(function() {
						callback( false );
					}, 1000);
				}
				
			}
		}

		xhr.send(data);

	}
	
	/* ---------------------------------------------------------------
							Modal Response
	-----------------------------------------------------------------*/
	
	// Show Response
	
	function callback( data ) {
		
		var success = $('#registrResponseSuccess'),
			danger = $('#registrResponseDanger');
		
		if ( data ) {
			
			setTimeout(function() {
				$( success ).slideToggle(2000, function() {
					$( this ).slideUp(2000);
				});
			}, 1000);
			
		} else {
			
			setTimeout(function() {
				$( danger ).slideToggle(2000, function() {
					$( this ).slideUp(2000);
				});
			}, 1000);
			
		}
	}
	
	/* -----------------------------------------------------
						AJAX FOR LOCATION 
	-------------------------------------------------------- */
	
	try {
		
		var region = $('[data-ajax="region"]');
		
	} catch( e ) {
		console.log( e.type + ' : ' + e.message );
	}
	
	$( region ).change(function() {
		var val = $( this ).val();
		var self = $( this ).attr('id');
		
		$.ajax({
			type: 'POST',
			url: 'ajax/change_location',
			data: 'id='+ val,
			success: function( data ) {
				deploy( data, self );
			}
		});
	});
	
	function deploy( data, self ) {
		var json = JSON.parse( data ),
			city;
		
		var id = json.id;
		var name = json.name;
		
		switch( self ) {
			case 'location':
				city = $('#city');
				break;
			case 'company_location':
				city = $('#company_city');
				break;
			default:
				break;
		}
		
		$( city ).html('');
		
		for(var i = 0; i<id.length; i++) {
			var option = document.createElement('option');
			option.setAttribute('value', id[i]);
			option.innerHTML = name[i];
			$( city ).append( option );
		}
	}


});