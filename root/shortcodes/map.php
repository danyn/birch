<?php

//usage  [show_map lat=$lat lng=$lng api=$key]
	//take a look at theme option for loactation cmb2 array -> returns null if no data
		// var_dump( birch_get_option( 'location' ) );
	
	//use the cmb2 theme option  to populate the front end map using a shortcode
 	//$loc = birch_get_option('location');
	// $short_arg = "[show_map lat='{$loc['latitude']}' lng='{$loc['longitude']}']";	
	// echo do_shortcode($short_arg);
function birch_map( $atts ) {
    $assoc = shortcode_atts( array(
		'lat' => '-25.363',
        'lng' => '131.044',
        'api' => 'AIzaSyCm3AoGrZV-OLBNGEqDdxu8TmnOFs_biWY',

			  
    ), $atts );
	
	$s= "
	
	    <style>
      #map {
        width: 100%;
        height: 400px;
        background-color: grey;
      }
    </style>
	
	
		<div id=\"map\"></div>
    	<script>
				function initMap() {
					var uluru = {lat: {$assoc['lat']}, lng: {$assoc['lng']}};
					var map = new google.maps.Map(document.getElementById('map'), {
						zoom: 12,
						center: uluru
					});
					var marker = new google.maps.Marker({
						position: uluru,
						map: map
					});
				}
    	</script>
    <script async defer
    src=\"https://maps.googleapis.com/maps/api/js?key={$assoc['api']}&callback=initMap\">
    </script>
		";

    return $s;
}
add_shortcode( 'show_map', 'birch_map' );