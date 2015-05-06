/* ---------------------
	Registration Form 
------------------------ */

var registrForm = document.forms.registform;

registrForm.addEventListener('submit', function(ev) {
	var data = new FormData(this);
	
	var xhr = new XMLHttpRequest();
	xhr.open('POST', '/registration', true);
	
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
	
	ev.preventDefault();
	
	return false;
});

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