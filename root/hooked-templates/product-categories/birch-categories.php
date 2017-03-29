<?php

function birch_categories($category_id, $category_name){

	echo "<h1>" . $category_name . "</h1>";
	$sc ='[product_categories number="12" parent="'. $category_id . '"]';
	echo do_shortcode($sc);
	echo "<hr>";
	
}

function birch_show_categories(){
	birch_categories(10,'Clothes');
	birch_categories(12,'Music');
	
}






//https://code.tutsplus.com/tutorials/display-woocommerce-categories-subcategories-and-products-in-separate-lists--cms-25479
  


