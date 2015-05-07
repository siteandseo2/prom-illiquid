/* ---------------------
		VALIDATION
-----------------------*/ 

var form = document.forms.registform,
	inputName = form.elements.name,
	inputPass = form.elements.password,
	inputEmail = form.elements.email,
	inputCompany = form.elements.company,
	inputSubmit = form.elements.register
	
	namePattern = /[^a-zA-Zа-яА-Я\s]/gi,
	passwordPattern = /[^a-zA-Zа-яА-Я0-9]/gi,
	emailPattern = /\w+\@\w+\.\w+/,
	
	required = [inputName, inputPass, inputEmail, inputCompany];
	
	required.forEach(function(input) {
		input.addEventListener('blur', function() {
			validate( this, this.value );
		});
	});


// Validation
function validate( self, str, pattern ) {
	
	switch( self.getAttribute('name') ) {
		case 'name':
			if( !namePattern.test( str ) && self.value.length ) {
				lightAccept();
			} else {
				lightDenied();
			}
			break;
		case 'password':
			if( !passwordPattern.test( str ) && self.value.length >= 8 ) {
				lightAccept();
			} else {
				lightDenied();
			}
			break;
		case 'company':
			if( self.value.length ) {
				lightAccept();
			} else {
				lightDenied();
			}
			break;
		case 'email':
			if( emailPattern.test( str ) && self.value.length ) {
				lightAccept();
			} else {
				lightDenied();
			}
			break;
		default:
			break;
	}
	
	function lightAccept() {
		// true
		if( self.classList.contains('validateInputFalse') ) {
			self.classList.remove('validateInputFalse');
		}
		
		if( !self.classList.contains('validateInputTrue') ) {
			self.classList.add('validateInputTrue');
		}
		
		if( self.nextElementSibling.classList.contains('validateIconFalse') ) {
			self.nextElementSibling.classList.remove('validateIconFalse');
		}
		
		if( !self.nextElementSibling.classList.contains('validateIconTrue') ) {
			self.nextElementSibling.classList.add('validateIconTrue');
		}
		
		if( self.nextElementSibling.children[0].classList.contains('fa-times') ) {
			self.nextElementSibling.children[0].classList.remove('fa-times');
		}
		
		if( !self.nextElementSibling.children[0].classList.contains('fa-check') ) {
			self.nextElementSibling.children[0].classList.add('fa-check');
		}
		
	}
	
	function lightDenied() {
		// false
		if( self.classList.contains('validateInputTrue') ) {
			self.classList.remove('validateInputTrue');
		}
		
		if( !self.classList.contains('validateInputFalse') ) {
			self.classList.add('validateInputFalse');
		}
		
		if( self.nextElementSibling.classList.contains('validateIconTrue') ) {
			self.nextElementSibling.classList.remove('validateIconTrue');
		}
		
		if( !self.nextElementSibling.classList.contains('validateIconFalse') ) {
			self.nextElementSibling.classList.add('validateIconFalse')
		}
		
		if( self.nextElementSibling.children[0].classList.contains('fa-check') ) {
			self.nextElementSibling.children[0].classList.remove('fa-check');
		}
		
		if( !self.nextElementSibling.children[0].classList.contains('fa-times') ) {
			self.nextElementSibling.children[0].classList.add('fa-times');
		}
		
	}
	
};

inputSubmit.addEventListener('click', function() {
	required.forEach(function(input) {
		validate( input, input.value );
	});
	
	var isAnyFalse = required.some(function(input) {
		return input.classList.contains('validateInputFalse');
	});
	
	if( isAnyFalse ) {
		form.onsubmit = function() {
			return false;
		}
	} else {
		//form.submit();
		// go to ajax.js =>
		doAjax();
	}
	
});

/* ---------------------
	Registration Form 
------------------------ */

//var registrForm = document.forms.registform;

function doAjax() {
	var data = new FormData( form );
	
	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'registration', true);
	
	xhr.onreadystatechange = function() {
		if( xhr.readyState != 4 ) return;
		
		if( xhr.status == 200 ) {
			console.log( '200!' );
			callback( true );
		} else {
			console.error(  xhr.status + ' : ' + xhr.statusText );
			callback( false );
		}
	}
	
	xhr.send(data);

}

var registrResponse = document.querySelector('.registrResponse'),
	registrResponseHead = document.querySelector('.registrResponse > h1'),
	overlay = document.querySelector('.overlay');

function callback( data ) {
	registrResponse.style.display = 'block';
	overlay.style.display = 'block';
	
	if( data ) {
		registrResponseHead.classList.add('registrResponseSuccess');
		registrResponseHead.innerHTML = 'Registration was succesful.<br>Thank You!';
	} else {
		registrResponseHead.classList.add('registrResponseFalse');
		registrResponseHead.innerHTML = 'Such email already been registred.<br>Try someone else, please.';
	}
}

var okBtn = document.querySelector('.modalOk');
okBtn.onclick = function() {
	registrResponse.style.display = 'none';
	overlay.style.display = 'none';
}
		