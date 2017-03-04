<?php
function birch_slider_heading_css(){
?>

<style id="flexslider">
/*	the container birch styles*/
	<?php 	
					include ("slider.css");
	      	include ("slider-heading.css");
					include ("slider-heading-variable.css");
	?>



</style>

<?php
}//birch_slider_heading_css


add_action('wp_head', 'birch_slider_heading_css',100);
add_action('admin_head', 'birch_slider_heading_css',100);

function birch_slider_heading_js(){
?>	
	<script id="birch_slider">
		jQuery(window).load(function() {
	

		//	make a slideshow with flexslider
		 // http://flexslider.woothemes.com/index.html
		// https://woocommerce.com/flexslider/
			jQuery('.birch-slider').flexslider({
				animation: "slide",
				directionNav: false,
				controlNav: "thumbnails",
				direction: "horizontal",  
			});

	});

</script>
	
<?php	
}//birch_slider_heading_js
add_action('wp_head','birch_slider_heading_js');





function birch_slider_heading(){
?>
<div id="heading-slider">
	<div class="birch-slider">
		<ul class="slides">
			<li class="a"
			 data-thumb="<?php echo get_stylesheet_directory_uri()?>\images\shoe-logos\resized\converse.png">
<!--				<img src="<?php echo get_stylesheet_directory_uri()?>/images/transparent-pixel.gif" alt="">-->
<!--			<a href="#" class="button"><i class="fa fa-snowflake-o" aria-hidden="true"></i>more</a>-->
			</li>
			<li class="b"
				 data-thumb="<?php echo get_stylesheet_directory_uri()?>\images\shoe-logos\resized\dress.png">
				
<!--					<img src="<?php echo get_stylesheet_directory_uri()?>/images/transparent-pixel.gif" alt="">-->
<!--				<a href="#" class="button"><i class="fa fa-free-code-camp" aria-hidden="true"></i>more</a>-->
			</li>
			<li class="c"
				 data-thumb="<?php echo get_stylesheet_directory_uri()?>\images\shoe-logos\resized\high-heel.png">
			
			<img src="<?php echo get_stylesheet_directory_uri()?>/images/image-anchors/high-heels.png" alt="">
<!--				<a href="#" class="button">more</a>-->
			</li>
			
		</ul>
		
	</div>
	<div class="water-mark"></div>
	</div><!--	#heading-slider-->
	
<?php
}//birch_slider_header

add_action('storefront_before_content','birch_slider_heading'); 
//jQuery FlexSlider v2.6.3	
wp_enqueue_script('FlexSlider', get_stylesheet_directory_uri() . '/js/jquery.flexslider-min.js', ['jquery']);


