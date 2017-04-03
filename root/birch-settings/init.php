<?php
require 'helper-functions.php';



remove_emoji(); 
//add_action('get_header','birch_fullscreen');



add_filter( 'body_class','birch_alter_body_classes',100 );