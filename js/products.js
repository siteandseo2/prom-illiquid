$(document).ready(function () {

    (function () {

        var prodGroup = $('#prod_group'),
			prodCat = $('#prod_cat'),
			prodSubCat = $('#prod_subcat');

        $( prodGroup ).change(function () {
		
			var val = $( this ).val();
			sendAjax( val, 'ajax/filter_by_group', prodCat );
			
        });
		
		$( document ).on('change', '#prod_cat', function() {
			
			var val = $( this ).val();
			sendAjax( val, 'ajax/filter_by_categories', prodSubCat );
			
		});
		
		function sendAjax( data, url, select ) {
			$.ajax({
				type: 'POST',
				url: url,
				data: data,
				success: function( data ) {
					fillSelect( data, select );
				}
			});
		}
		
		function fillSelect( data, select ) {
			
			$( select ).html('<option value="default">Выберите категорию</option>');
            
			var obj = JSON.parse( data );
			
			var names = obj.name;
			var values = obj.id;
			
			for(var i = 0; i<names.length; i++) {
				var opt = document.createElement('option');
				opt.innerHTML = names[i];
				opt.setAttribute('value', 'id='+values[i]);
				
				$( select ).append( opt );
			}
			
        }

    }());

});