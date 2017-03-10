<?php



function birch_heading_options(){
		$prefix = 'bho_';
	/**
	 * Sample metabox to demonstrate each field type included
	 */
		$bho = new_cmb2_box( array(
			'id'            => $prefix . 'metabox',
			'title'         => esc_html__( 'Birch Page Heading Options', 'cmb2' ),
			'object_types'  => array( 'page', ), // Post type
			// 'show_on_cb' => 'birch_show_if_front_page', // function should return a bool value

		) ); 
	
		$bho->add_field( array(
		'name'             => esc_html__( 'Select Element To Show', 'cmb2' ),
		'desc'             => esc_html__( 'Choose a type of graphic to display above content and under the nav. Or Choose none to not use this element', 'cmb2' ),
		'id'               => $prefix . 'options',
		'type'             => 'radio_inline',
		'show_option_none' => 'None',
		'options'          => array(
			'image_heading' => esc_html__( 'A Banner Image Heading', 'cmb2' ),
			'carousel'   => esc_html__( 'Full Screen Carousel', 'cmb2' ),
			'seasonal'   => esc_html__( 'Full Height Seasonal graphic', 'cmb2' ),
//			'none'     => esc_html__( 'none', 'cmb2' ),
		),//select options array
	) );
	
}//birch_heading_options()

/**
 * Hook into'cmb2_admin_init' or 'cmb2_init' hook.  Metaboxes for the image heading
 */

