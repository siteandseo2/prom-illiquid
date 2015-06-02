$( document ).ready(function() {
	
	(function() {
		
		var prodGroup = $('#prod_group'),
		var prodCat = $('#prod_cat'),
		var prodSubCat = $('#prod_subcat');
		
		$( prodGroup ).change(function() {
			
			var val = $( this ).val();
			
			$.ajax({
				type: 'GET',
				url: 'cabinet/filter_by_group',
				data: val,
				success: function( data ) {
					fillCat( data );
				}
			});
			
		});
		
		function fillCat( data ) {
			console.log( data );
			console.log( typeof data );
		}
		
		
	}());
	
});