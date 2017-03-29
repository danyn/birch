<?php 

//Add the imgage heading if it is selected in the admin for a page

if ( file_exists( dirname( __FILE__ ) . '/image-heading.php' ) && (! is_admin()) ) {
		require_once dirname( __FILE__ ) . '/image-heading.php';	
	}
add_action('storefront_before_content','birch_image_heading'); 
add_action('wp_head', 'birch_image_heading_css',100);
//add_action('admin_head', 'birch_image_heading_css',100);




//Add the full page media layout

if ( file_exists( dirname( __FILE__ ) . '/media-grid/media-fullpage.php' ) && (! is_admin()) ) {
		require_once dirname( __FILE__ ) . '/media-grid/media-fullpage.php';	
	}
//add_action('storefront_before_content','media_fullpage'); 


//show category lists

if ( file_exists( dirname( __FILE__ ) . '/product-categories/birch-categories.php' ) && (! is_admin()) ) {
		require_once dirname( __FILE__ ) . '/product-categories/birch-categories.php';	
	}


add_action( 'birch_category_list', 'birch_show_categories',1,0);
//add_action( 'woocommerce_before_shop_loop', 'tutsplus_product_subcategories', 50 );
//add_action( 'birch_category_list', 'tutsplus_product_subcategories', 50 );






