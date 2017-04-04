<?php

require 'birch-layered-nav.php';
	

add_action( 'widgets_init', function(){
	register_widget( 'Birch_Layered_Nav' );
});  