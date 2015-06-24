/* Custom Autocomplete */
/*
	function autoComplete(input, arr) {
		
		try {
			input.addEventListener('keyup', init);
		} catch(err) {
			console.log( err.type + ' ' + err.message );
		}
		
		function init() {
	
			var val = this.value;
			
			if( val.length < 3 ) return;
			
			for(var i = 0; i<arr.length; i++) {
				if( arr[i].match( new RegExp( val, 'i' ) ) !== null ) {
					createList( arr[i] );
				}
			}
			
			
			input.insertAdjacentElement('afterEnd', div);
			
			var lis = div.getElementsByTagName('li');
			[].forEach.call(lis, function(li) {
				li.addEventListener('click', function(ev) {
					
					var targetInput = input.parentNode.previousElementSibling.previousElementSibling;
					
					targetInput.innerHTML = ev.target.innerHTML;
					
					div.classList.toggle('prompt-on');
				});
			});
			
		};
		
		var div = document.createElement('div');
		var ul = document.createElement('ul');
		div.className = 'promptDiv';
		ul.className = 'promptUl';
		div.appendChild(ul);
		
		function createList( elem ) {
			div.classList.toggle('prompt-on');
		
			var li = document.createElement('li');
			
			var lis = ul.getElementsByTagName('li');
			
			if( !lis.length ) {
				li.innerHTML = elem;
				ul.appendChild(li);
			} else {
				checkIsTheSame( lis, elem );
			}
			 
		}
		
		function checkIsTheSame( list, elem ) {
			[].forEach.call(list, function(li) {
				var text = li.innerHTML;
				
				if( text != elem ) {
					li.innerHTML = elem;
					ul.appendChild(li);
				}
			});
		}
		
	}
*/

/* Custom Autocomplete */
	
function autoComplete(input, arr) {
	
	// get default coords of input elem
	var initCoords = function coords( elem ) {
		return {
			left: elem.getBoundingClientRect().left,
			top: elem.getBoundingClientRect().top
		}
	}( input );
	
	// set Div styles
	var div = document.createElement('div');
	div.className = 'divPrompt';
	
	div.style.top = initCoords.top + input.clientHeight + 10 + 'px';
	div.style.left = initCoords.left + 'px';
	div.style.width = ( input.clientWidth / 3 )*2 + 'px';
	
	// set Ul styles
	var ul = document.createElement('ul');
	ul.className = 'ulPrompt';
	
	div.appendChild(ul);

	input.addEventListener('keyup', function() {

		var val = this.value;
		
		if( val.length < 2 ) return;
		
		// match ?
		var matchList = [];
		for(var i = 0; i<arr.length; i++) {
			if( arr[i].match( new RegExp( val, 'i' ) ) !== null ) {
				matchList.push( arr[i] );
			}
		}
		createList( matchList );
		
		 // has elems ?
		if( div.children[0].children.length ) {           
			div.classList.remove('prompt-off');
			input.insertAdjacentElement('afterEnd', div);
		}
		
		// click on item ?
		var lis = div.getElementsByTagName('li');
		[].forEach.call(lis, function(li) {
			li.addEventListener('click', function(ev) {
				
				div.classList.add('prompt-off');
				input.parentNode.parentNode.firstElementChild.innerHTML = ev.target.innerHTML;
				
			});
		});
		
	});
	
	function createList( elemList ) {
		ul.innerHTML = '';
			
		elemList.forEach(function(elem) {
			var li = document.createElement('li');
			li.innerHTML = elem;
			ul.appendChild(li);
		});
	}

};

