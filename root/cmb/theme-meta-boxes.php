<?php
	$cmb->add_field( array(
			'name' => __( 'Test Text', 'birch' ),
			'desc' => __( 'field description (optional)', 'birch' ),
			'id'   => 'test_text',
			'type' => 'text',
			'default' => 'Default Text',
		) );

		$cmb->add_field( array(
			'name'    => __( 'Test Color Picker', 'birch' ),
			'desc'    => __( 'field description (optional)', 'birch' ),
			'id'      => 'test_colorpicker',
			'type'    => 'colorpicker',
			'default' => '#bada55',
		) );
		
		$cmb->add_field( array(
    'name' => 'Location',
    'desc' => 'Drag the marker to set the exact location',
    'id' => 'location',
    'type' => 'pw_map',
    // 'split_values' => true, // Save latitude and longitude as two separate fields
		) );
		
		
		$group_field_id = 'hours';
		$group_field_id = $cmb->add_field( array(
    'id'          => 'wiki_test_repeat_group',
    'type'        => 'group',
    'description' => __( 'Generates reusable form entries', 'cmb2' ),
    // 'repeatable'  => false, // use false if you want non-repeatable group
    'options'     => array(
        'group_title'   => __( 'Hours Of Operation {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
        'add_button'    => __( 'Add Another Entry', 'cmb2' ),
        'remove_button' => __( 'Remove Entry', 'cmb2' ),
        'sortable'      => true, // beta
        // 'closed'     => true, // true to have the groups closed by default
    ),
) );

// Id's for group's fields only need to be unique for the group. Prefix is not needed.
$cmb->add_group_field( $group_field_id, array(
    'name' => 'Entry Title',
    'id'   => 'title',
    'type' => 'text',
    // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
) );

$cmb->add_group_field( $group_field_id, array(
    'name' => 'Description',
    'description' => 'Write a short description for this entry',
    'id'   => 'description',
    'type' => 'textarea_small',
) );

$cmb->add_group_field( $group_field_id, array(
    'name' => 'Entry Image',
    'id'   => 'image',
    'type' => 'file',
) );

$cmb->add_group_field( $group_field_id, array(
    'name' => 'Image Caption',
    'id'   => 'image_caption',
    'type' => 'text',
) );