/* Custom Autocomplete */
	
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