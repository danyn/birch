<?php
// use the cmb2 files
if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}

if ( file_exists( dirname( __FILE__ ) . '/page-meta.php' ) ) {
	require_once dirname( __FILE__ ) . '/page-meta.php';
}

if ( file_exists( dirname( __FILE__ ) . '/theme-options.php' ) ) {
	require_once dirname( __FILE__ ) . '/theme-options.php';
}



//add metaboxes to pages
add_action( 'cmb2_admin_init', 'birch_heading_options' );
add_action( 'cmb2_admin_init', 'birch_image_heading_options' );




//add js to enhance meta boxes
function birch_cmb_admin() {

	//load js
	$deps_js = ['jquery'];
	wp_enqueue_script('cc_js', get_stylesheet_directory_uri(). '/cmb/js/birch-cmb.js', $deps_js);
	
	
}

	add_action('admin_enqueue_scripts', 'birch_cmb_admin');

