﻿$( document ).ready(function() {
	
	// VARIABLES
	
	var topBarCounter = $('#topBarCartLink'),
		buyBtn = $('.buy-it'),
		cartAmount = $('#cart-amount'),
		cartTotalPrice = $('#modalCart .totalPrice .sum'),
		parentBlock = $('.items-list'),
		isSession;
		
	// WHAT FLOW
	
	isSession = (function() {
		
		if( sessionStorage.length ) {
			var keys = Object.keys( sessionStorage );
			var res = keys.some(function(key) {
				return ~key.indexOf('item_');
			});
			return res;
		}
		
		return false;
		
	}());
	
	console.log( isSession );
	
	// TOPBAR CLICK
		
	$( topBarCounter ).click(function() {
		isEmpty();
		
		if( isSession ) useSession();
	});
	
	// BUYCLICK
	
	$( buyBtn ).click(function() {
		
		var itemBlock = $( this ).parent().parent(),
			parent_id;
		
		id = this.id,
		name = this.tagName == 'A' ? $( itemBlock ).find('#itemName').text().trim() : $('#itemName').text().trim(),
		item_price = this.tagName == 'A' ? {
			price: +$( itemBlock ).find('.price').text(),
			currency: $( itemBlock ).find('.currency').text(),
			quantity: $( itemBlock ).find('.quantity').text(),
			changedQuantity: $( itemBlock ).find('.quantity').text()
		} : {
			price: +$('.summary .price').text(),
			currency: $('.summary .currency').text(),
			quantity: $('.summary .quantity').text(),
			changedQuantity: $('.summary [type="number"]').val()
		},
		img = this.tagName == 'A' ? $( itemBlock ).parent().find('#mainImage').attr('src') : $('#mainImage').attr('src');
		
		if( this.tagName == 'A' ) {
			parent_id = this.getAttribute('rel');
		} else {
			var sellerBlock = $( this ).parent().next().next().find('.company a').attr('href').split('/');
			parent_id = sellerBlock[sellerBlock.length - 1];
		}
		
		switch( item_price.changedQuantity ) {
			case 'Шт.':
			case 'Упаковку':
				item_price.changedQuantity = 1;
				break;
			default:
				item_price.changedQuantity = parseInt( item_price.changedQuantity );
				break;
		}
		
		var countable = this.tagName == 'A' ? false : true;
		
		var item = new Item(id, name, item_price, img, parent_id, countable);
		
		insertItem( item, isSession );
		
	});
	
	// CONSTRUCTOR
	
	function Item(id, name, price, img, parent, countable) {
		this.id = id;
		this.name = name;
		this.price = price;
		this.img = img;
		this.parent = parent;
		this.countable = countable;
	};
	
	Item.save = function( item ) {
		sessionStorage.setItem('item_' + item.id, JSON.stringify({
			id: item.id,
			name: item.name,
			price: item.price,
			img: item.img
		}));
	}
	

	sessionStorage.clear();
	
	// DEFINE VARS
	
	function insertItem( item, isSession ) {
		
		// Session Block
		if( isSession ) useSession();
		
		Item.save( item );
		
		// Client Block
		currentCount( true ).save().setHTML();
		totalPrice( true, item.price.price ).save().setHTML();
		
		fillInVars( 
			item.id, 
			item.img, 
			item.name, 
			item.price.price, 
			item.price.currency, 
			item.price.quantity,
			item.price.changedQuantity,
			item.parent,
			item.countable
		);
	}
	
	// CREATE HTML
	
	function fillInVars( id, img, name, price, currency, quantity, changedQuantity, parent, countable ) {
		$( parentBlock ).append(' \
			<section class="cartItemBlock clearfix" id="' + id + '"> \
				<img src="' + img + '" width="100" height="100" class="thumb img-thumbnail"> \
				<button type="button" class="close item-close">&times;</button> \
				<p> \
					<span class="title">' + name + '</span> \
				</p> \
				<p> \
					<span class="price">' + price + '</span> \
					<span class="currency">' + currency + '</span> \
					<span class="separator">за</span> \
					<span class="quantity">' + quantity + '</span> \
				</p> \
				<p class="left"> \
					<span>Количество</span> \
					<input type="number" min="' + changedQuantity + '" step="' + changedQuantity + '" value="' + changedQuantity + '"> \
				</p> \
				<input type="hidden" name="h_name[' + id + ']" value="' + name + '">\
				<input type="hidden" name="h_price[' + id + ']" value="' + price + '">\
				<input type="hidden" name="h_currency[' + id + ']" value="' + currency + '">\
				<input type="hidden" name="h_quantity[' + id + ']" value="' + quantity + '">\
				<input type="hidden" name="h_id[' + id + ']" value="' + id + '">\
				<input type="hidden" name="h_parent[' + id + ']" value="' + parent + '">\
			</section>'
		);
		
		alreadyExist( id, countable );
	}
	
	// ALREADY EXIST
	
	function alreadyExist( id ) {
		var allItems = $( parentBlock ).children(),
			matchedInputValue = $( parentBlock ).find('[id="' + id + '"] [type="number"]');
		
		var already = [].filter.call(allItems, function(item) {
			return item.id == id;
		});
		
		if( already.length > 1 ) {
			$( parentBlock ).find('section:last-child').remove();
			var itemValue = +$( matchedInputValue ).val();
			itemValue += itemValue;
			$( matchedInputValue ).val( itemValue );
		}
	}
	
	// USE SESSION
	
	function useSession() {
		$( parentBlock ).html('');
			
		var parsed = parseSession();
		
		for( var key in parsed ) {
			fillInVars( 
				parsed[key].id, 
				parsed[key].img, 
				parsed[key].name, 
				parsed[key].price.price, 
				parsed[key].price.currency, 
				parsed[key].price.quantity,
				parsed[key].price.changedQuantity,
				parsed[key].parent,
				parsed[key].countable
			);
		}
		
		currentCount.setHTML();
		totalPrice.setHTML();
	}
	
	// PARSE SESSION
	
	function parseSession() {
		var items = {};
		
		for( var key in sessionStorage ) {
			if( ~key.indexOf('item_') ) {
				items[key] = JSON.parse( sessionStorage[key] );
			}
		}
		return items;
	}
	
	// COUNT API
	
	var currentCount = function() {
		var c = sessionStorage['cartCount'] || 0;
		
		function count( bool ) {
			bool ? ++c : --c;
			return count;
		}
		count.setHTML = function() {
			$( cartAmount ).html( c );
		}
		count.save = function() {
			sessionStorage.setItem('cartCount', c);
			return count;
		}
		count.set = function( val ) {
			c = val;
		}
		count.reset = function() {
			c = 0;
		}
		
		return count;
		
	}();
	
	currentCount.setHTML();
	
	// TOTAL PRICE
	
	var totalPrice = function() {
		var total = +sessionStorage['totalPrice'] || 0;
		
		function execute( bool, num ) {
			bool ? total += +num : total -= +num;
			return execute;
		}
		execute.setHTML = function() {
			$( cartTotalPrice ).html( total );
		}
		execute.save = function() {
			sessionStorage.setItem('totalPrice', total);
			return execute;
		}
		execute.set = function(val) {
			total = val;
		}
		execute.reset = function() {
			total = 0;
		}
		
		return execute;
	}();
	
	// REMOVE
	
	$( document ).on('click', '.item-close', function() {
		$( this ).parent().remove();
		sessionStorage.removeItem( 'item_' + $(this).parent().attr('id') );
		
		currentCount( false ).save().setHTML();
		
		totalPrice( false, $( this ).parent().find('.price').text() ).save().setHTML();
		
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