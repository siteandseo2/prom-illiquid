$( document ).ready(function() {
		
	/* Sidebar hovers */
	
	var links = $('#sideBar a');
	
	$( links ).click(function(ev) {
		
		ev.preventDefault();
                
		var target = $( ev.target );
		var page = $(target).attr('data-ajax');
                
		$.ajax({
			type: "GET",
			url: "admin_page_ajax",
			data: page,
			dataType: 'text/plain',
			success: function(data) {
				if( data != '' ) {
					$('body').html(data);
				} else {
					console.log( data );
				}
			}
		});
		
	});
	
});