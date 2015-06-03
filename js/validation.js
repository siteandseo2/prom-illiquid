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
		if( who == 'seller' ) {
			$('.seller-set').css('display', 'block');
		} else {
			$('.seller-set').css('display', 'none');
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

	inputSubmit.addEventListener('click', function () {
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
			doAjax( 'user/add_user' );
		}

	});

	/* ----------------------------------------------------
							AJAX
	 ------------------------------------------------------ */

	function doAjax( url ) {

		var data = new FormData(form);

		var xhr = new XMLHttpRequest();
		xhr.open('POST', url, true);

		xhr.onreadystatechange = function () {
			if (xhr.readyState != 4)
				return;

			if (xhr.status == 200) {
				setTimeout(function() {
					callback( true );
				}, 1000);
			} else {
				console.error(xhr.status + ' : ' + xhr.statusText);
				
				setTimeout(function() {
					callback( false );
				}, 1000);
			}
		}

		xhr.send(data);

	}
	
	// Modal Response
	
	try {
		
		var registrResponse = document.querySelector('.registrResponse'),
			registrResponseHead = document.querySelector('.registrResponse > h1'),
			overlay = document.querySelector('.overlay'),
			okBtn = document.querySelector('.modalOk');
		
	} catch( e ) {
		console.log( e.type + ' : ' + e.message );
	}
	
	// Show Modal
	function callback( data ) {
		registrResponse.style.display = 'block';
		overlay.style.display = 'block';

		if (data) {
			registrResponseHead.classList.add('registrResponseSuccess');
			registrResponseHead.innerHTML = 'Спасибо!<br>Ваша регистрация прошла успешно.';
		} else {
			registrResponseHead.classList.add('registrResponseFalse');
			registrResponseHead.innerHTML = 'Такой пользователь уже зарегистрирован.<br>Проверьте корректность введенных Вами данных.';
		}
	}

	okBtn.onclick = function() {
		clearModal();
	}
	
	$( document ).on('click', '.overlay', function() {
		clearModal();
	});
	
	// Clear Modal
	function clearModal() {
		registrResponse.style.display = 'none';
		overlay.style.display = 'none';

		[].forEach.call(required, function (input) {
			input.value = '';
			input.className = 'validate';
			input.nextElementSibling.className = 'form-icon';
		});
	}



});