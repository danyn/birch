<?php

require 'birch-layered-nav.php';
require 'birch-layered-nav-js.php';
	
//initialize the widget
add_action( 'widgets_init', function(){
	register_widget( 'Birch_Layered_Nav' );
});  

//write all necessary assets js, css into the head when widget is active and viewing a product category
add_action('wp_head','add_birch_layered_nav'); 


function add_birch_layered_nav(){
	if (is_active_widget( false, false, 'birch_layered_nav', true ) && is_product_category() ){
			birch_layered_nav_js();
	}//if active and products shown as archive
}

