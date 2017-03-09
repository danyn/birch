<?php

/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */

function birch_metabox() {
	add_action( 'cmb2_before_post_form_birch_metabox', 'birch_image_heading' );
	$prefix = 'birch_';
	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$birch_image_heading = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => esc_html__( 'Image Heading Assets', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		// 'show_on_cb' => 'birch_show_if_front_page', // function should return a bool value
		
	) );
	$birch_image_heading->add_field( array(
		'name' => esc_html__( 'Image Heading Title', 'cmb2' ),
		'desc' => esc_html__(  'Enter A Short Statement that Describes this Page. Shown when the Image Heading is Active', 'cmb2' ),
		'id'   => $prefix . 'heading_text',
		'type' => 'text',
		
	) );
	
	
		$birch_image_heading->add_field( array(
		'name' => esc_html__( 'Image Heading  Subtitle', 'cmb2' ),
		'desc' => esc_html__(  'Enter A Short Statement To Follow the Main One', 'cmb2' ),
		'id'   => $prefix . 'Subheading_text',
		'type' => 'text',
		
	) );
	
	
	$birch_image_heading->add_field( array(
		'name'    => esc_html__( 'Background Color', 'cmb2' ),
		'desc'    => esc_html__( 'Background Color Of The Image Header ', 'cmb2' ),
		'id'      => $prefix . 'heading_background_color',
		'type'    => 'colorpicker',
		'default' => '#ffffff',

	) );
	
	$birch_image_heading->add_field( array(
		'name' => esc_html__( 'Background Image', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.  Recomend 590px wide and 230px tall with a transaparency gradient on the side that blends into the background color', 'cmb2' ),
		'id'   => $prefix . 'heading_image',
		'type' => 'file',
//		'after_row'    => birch_image_heading,
	) );
	
	
}