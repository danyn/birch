<?php

function remove_emoji(){
	// REMOVE WP EMOJI
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');

	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
}


//Test if the what the post type is [post,page,attachment,revision,nav_menu_item]
function is_post_type($post_type){
	return get_post_type( get_the_ID() ) == $post_type;   	
}

function birch_admin_view_front(){

	if ( is_admin_bar_showing() ) {
	    echo '<style> header#masthead{margin-top:32px !important;}</style>';
	}
}


function birch_scripts() {

  wp_enqueue_script( 'birchJs', get_stylesheet_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'fontAwesome', 'https://use.fontawesome.com/fe7f3fe8ea.js');
}
add_action( 'wp_enqueue_scripts', 'birch_scripts' ); 

/** Remove product count functionality site-wide */
//function woocommerce_result_count() {
//return;
//}


add_filter( 'woocommerce_subcategory_count_html', 'birch_remove_category_products_count' );

function birch_remove_category_products_count() {
	return;
}




//https://code.tutsplus.com/tutorials/adding-to-the-body-class-in-wordpress--cms-21077
function birch_body_classes( $classes ) {
 
    $classes[] = 'abba';
    $classes[] = 'ABBA';
     
    return $classes;
     
}

function birch_alter_body_classes( $classes ) {
		if( is_page_template('categorylist.php') ){
     $classes = array_diff($classes, ["right-sidebar"]);
		}
    return $classes;
		
}






//https://gist.github.com/srdco/fa852ebe33bde0e42d7e5834ac7ca61a
//function birch_fullscreen(){
//	if( is_page_template('template-categorylist.php') ){
//		remove_action('storefront_sidebar', 'storefront_get_sidebar',10);
//	}
//} 





