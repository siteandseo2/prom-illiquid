$( document ).ready(function() {
		
	/* Sidebar hovers */
	
	var links = $('.ajax');
	
	$( links ).click(function(ev) {
		
		ev.preventDefault();
                
		var target = $( ev.target );
		var page = $(target).attr('data-ajax');
                
		$.ajax({
			type: "GET",
			url: "admin_page_ajax",
			data: page,
			dataType: 'html',
			success: function(data) {
				console.log( 'success!' );
				
				$('body').html( data );
			}
		});
		
	});
	
});