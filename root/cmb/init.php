<?php
// use the cmb2 files
if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}

//add metaboxes to pages
add_action( 'cmb2_admin_init', 'birch_metabox' );

if ( file_exists( dirname( __FILE__ ) . '/page-meta.php' ) ) {
	require_once dirname( __FILE__ ) . '/page-meta.php';
}

//add theme-option meta boxes to the the admin
	//this is inits an object to display the admin page
if ( file_exists( dirname( __FILE__ ) . '/theme-options.php' ) ) {
	require_once dirname( __FILE__ ) . '/theme-options.php';
}


function birch_cmb_admin() {

	//load js
	$deps_js = ['jquery'];
	wp_enqueue_script('cc_js', get_stylesheet_directory_uri(). '/cmb/js/birch-cmb.js', $deps_js);
	
	
}

	add_action('admin_enqueue_scripts', 'birch_cmb_admin');

