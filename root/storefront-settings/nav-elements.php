<?php

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


function birch_header() {

	add_action( 'storefront_header', 'storefront_display_custom_logo', 20 );
	add_action( 'storefront_header', 'storefront_primary_navigation_wrapper',       42 );
	add_action( 'storefront_header', 'storefront_primary_navigation',               50 );
	add_action( 'storefront_header', 'storefront_header_cart',                      60);
	add_action( 'storefront_header', 'storefront_primary_navigation_wrapper_close', 68 );
//		add_action( 'storefront_header', 'storefront_header_cart',                      70);
}

add_action( 'storefront_before_header', 'birch_header', 0  );



function storefront_display_custom_logo() {
?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo-link" rel="home">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="<?php echo get_bloginfo( 'name' ); ?>" />
	</a>
<?php
}
