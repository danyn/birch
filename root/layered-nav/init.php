<?php

require 'birch-layered-nav.php';
	

add_action( 'widgets_init', function(){
	register_widget( 'Birch_Layered_Nav' );
});  


function birch_layered_nav_js(){
	if (is_active_widget( false, false, 'birch_layered_nav', true ) && is_product_category() ){
?>
<script>
jQuery( document ).ready( function( $ ) {
    // $() will work as an alias for jQuery() inside of this function
    console.log('birch_layered_nav_js');
	
//	var query_string = $(location).attr('href').split('?')[1].replace(/filter_/g,'attribute_pa_');
	var query_string = $(location).attr('href').split('?')[1];
	if (query_string){
		query_string = query_string.replace(/filter_/g,'attribute_pa_');
			var variable_products = $(' li.product-type-variable a');

		variable_products.each(function(){
			this.href = this.href + '?' + query_string;
			console.log(this.href);
		});
	}//if there is a query string
	console.log(query_string);	
} );//document ready
</script>	
<?php  
 }//if widget active
}//bich_layered_nav_js
add_action('wp_head','birch_layered_nav_js');


//pa_