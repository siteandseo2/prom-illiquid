$( document ).ready(function() {
	
	// VARIABLES
	
	var topBarCounter = $('#topBarCartLink'),
		buyBtn = $('.buy-it'),
		cartAmount = $('#cart-amount');
	
	// TOPBARCLICK
		
	$( topBarCounter ).click(function() {
		isEmpty();
	});
	
	// BUYCLICK
	
	$( buyBtn ).click(function() {
	
		var itemBlock = $( this ).parent().parent(),
		
		id = this.id,
		name = this.tagName == 'A' ? $( itemBlock ).find('#itemName').text().trim() : $('#itemName').text().trim(),
		item_price = this.tagName == 'A' ? {
			price: +$( itemBlock ).find('.price').text(),
			currency: $( itemBlock ).find('.currency').text(),
			quantity: $( itemBlock ).find('.quantity').text()
		} : {
			price: +$('.price').text(),
			currency: $('.currency').text(),
			quantity: $('.quantity').text()
		},
		img = this.tagName == 'A' ? $( itemBlock ).parent().find('#mainImage').attr('src') : $('#mainImage').attr('src');
		
		var item = new Item(id, name, item_price, img);
		
		console.log( item );
		
		insertItem( item );
		
	});
	
	// CONSTRUCTOR
	
	function Item(id, name, price, img) {
		this.id = id;
		this.name = name;
		this.price = price;
		this.img = img;
		this.save = function() {
			localStorage.setItem('item_' + id, JSON.stringify({
				id: this.id,
				name: this.name,
				price: this.price,
				img: this.img
			}));
		}
	};
	
	// INSERT
	
	function insertItem( item ) {
		
		currentCount( true ).setHTML();
		
		isEmpty();
		
		var parentBlock = $('.items-list');
		
		$( parentBlock ).append(' \
			<section class="cartItemBlock clearfix" id="' + item.id + '"> \
				<img src="' + item.img + '" width="100" height="100" class="thumb img-thumbnail"> \
				<button type="button" class="close item-close">&times;</button> \
				<p> \
					<span class="title">' + item.name + '</span> \
				</p> \
				<p> \
					<span class="price">' + item.price.price + '</span> \
					<span class="currency">' + item.price.currency + '</span> \
					<span class="separator">за</span> \
					<span class="quantity">' + item.price.quantity + '</span> \
				</p> \
			</section>'
		);
		
	}
	
	// COUNT API
	
	var currentCount = function() {
		
		var c = 0;
		
		function count( bool ) {
			bool ? ++c : --c;
			return count;
		}
		count.set = function( val ) {
			c = val;
		}
		count.reset = function() {
			c = 0;
		}
		count.setHTML = function() {
			$( cartAmount ).html( c );
		}
		
		return count;
		
	}();
	
	currentCount.setHTML();
	
	// REMOVE
	
	$( document ).on('click', '.item-close', function() {
		$( this ).parent().remove();
		currentCount( false ).setHTML();
		isEmpty();
	});
	
	// ISEMPTY
		
	function isEmpty() {
		return ( $( cartAmount ).html() == '0' ) ? hide() : show();
		
		function hide() {
			$('#modalCart').find('.modal-header').hide();
			$('#modalCart').find('.modal-footer').hide();
			$('#modalCart').find('.modal-body form').hide();
			$('#modalCart').find('.empty_cart').show();
		}
		
		function show() {
			$('#modalCart').find('.modal-header').show();
			$('#modalCart').find('.modal-footer').show();
			$('#modalCart').find('.modal-body form').show();
			$('#modalCart').find('.empty_cart').hide();
		}
	}
	
	
});