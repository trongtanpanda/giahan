jQuery(function($){
	'use strict';
	$( document ).ready(function() {
	    $('input[name="data[url]"]').val(window.location);
	    $('input[name="data[product_name]"]').val($('.product-main-info h2').html());	
	});
});