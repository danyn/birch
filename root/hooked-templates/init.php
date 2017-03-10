<?php 

//Add the imgage heading if it is selected in the admin for a page

if ( file_exists( dirname( __FILE__ ) . '/image-heading.php' ) ) {
		require_once dirname( __FILE__ ) . '/image-heading.php';	
	}
add_action('storefront_before_content','birch_image_heading'); 
add_action('wp_head', 'birch_image_heading_css',100);
add_action('admin_head', 'birch_image_heading_css',100);










