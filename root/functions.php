<?php



//birch_admin_view_front();
// include  'templates.php';
// include 'cmb2/init.php';
//include 'cmb_field_map-master/cmb-field-map.php';
// include 'theme-options.php';
include 'hooked-templates/init.php';
include 'shortcodes/init.php';
include 'cmb/init.php';


//display custom logo
add_action( 'storefront_before_header', 'birch_header', 0  );
function birch_header() {

	add_action( 'storefront_header', 'storefront_display_custom_logo', 20 );
	add_action( 'storefront_header', 'storefront_primary_navigation_wrapper',       42 );
	add_action( 'storefront_header', 'storefront_primary_navigation',               50 );
	add_action( 'storefront_header', 'storefront_header_cart',                      60);
	add_action( 'storefront_header', 'storefront_primary_navigation_wrapper_close', 68 );
//		add_action( 'storefront_header', 'storefront_header_cart',                      70);
}


//end display custom logo

function reset_header(){
	remove_action( 'storefront_header', 'storefront_skip_links',                       0 );
	remove_action( 'storefront_header', 'storefront_site_branding',                    20 );
	remove_action( 'storefront_header', 'storefront_secondary_navigation',             30 );
	remove_action( 'storefront_header', 'storefront_product_search',                   40 );
	remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper',       42 );
	remove_action( 'storefront_header', 'storefront_primary_navigation',               50 );
	remove_action( 'storefront_header', 'storefront_header_cart',                      60 );
	remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper_close', 68 );
	

	
}
add_action('init', 'reset_header');


function storefront_display_custom_logo() {
?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo-link" rel="home">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="<?php echo get_bloginfo( 'name' ); ?>" />
	</a>
<?php
}


function birch_admin_view_front(){

	if ( is_admin_bar_showing() ) {
	    echo '<style> header#masthead{margin-top:32px !important;}</style>';
	}
}



// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

//Test if the what the post type is [post,page,attachment,revision,nav_menu_item]
function is_post_type($post_type){
	return get_post_type( get_the_ID() ) == $post_type;   	
}




?>