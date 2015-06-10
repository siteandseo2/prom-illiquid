$( document ).ready(function() {
	
	var topBarCounter = $('#topBarCartLink'),
		buyBtn = $('.buy-it'),
		cartAmount = $('#cart-amount');
		
	$( topBarCounter ).click(function() {
		isEmpty();
	});
	
	function isEmpty() {
		
		if( $( cartAmount ).html() == '0' ) {
			$('#modalCart').find('.modal-content').html('<div class="modal-body">Ваша корзина пока пуста</div>');
		} 
		
	}
	
	
});