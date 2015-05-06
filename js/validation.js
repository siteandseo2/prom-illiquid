/* ---------------------
		VALIDATION
-----------------------*/ 

var form = document.forms.registform,
	inputName = form.elements.name,
	inputPass = form.elements.password,
	inputEmail = form.elements.email,
	inputCompany = form.elements.company,
	inputSubmit = form.elements.register;
	
// name
inputName.addEventListener('keyup', function() {
	var pattern = /[^a-zA-Zа-яА-Я]/gi;
	validate( this, this.value, pattern );
	
	ifEveryIsValid();
});

// password
inputPass.addEventListener('keyup', function() {
	var pattern = /[^a-zA-Zа-яА-Я0-9]/gi;
	validate( this, this.value, pattern );
	
	ifEveryIsValid();
});

// email
inputEmail.addEventListener('keyup', function() {
	var pattern = /\w+\@\w+\.\w+/;
	validate( this, this.value, pattern );
	
	ifEveryIsValid();
});

// company
inputCompany.addEventListener('keyup', function() {
	//var pattern = /[^a-zA-Zа-яА-Я0-9]/gi;
	validate( this, this.value );
	
	ifEveryIsValid();
});

function validate( self, str, pattern ) {
	
	switch( self.getAttribute('name') ) {
		case 'name':
			if( !pattern.test( str ) && self.value.length ) {
				lightAccept();
			} else {
				lightDenied();
			}
		break;
		case 'password':
			if( !pattern.test( str ) && self.value.length >= 8 ) {
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
			if( pattern.test( str ) && self.value.length ) {
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

function ifEveryIsValid() {
	if( inputName.classList.contains('validateInputTrue') && inputEmail.classList.contains('validateInputTrue') && inputCompany.classList.contains('validateInputTrue') && inputPass.classList.contains('validateInputTrue') ) {
		inputSubmit.removeAttribute('disabled');
	} else {
		inputSubmit.setAttribute('disabled', '');
	}
}
		