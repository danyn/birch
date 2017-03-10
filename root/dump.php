<?php
/**
 * Customises the stock Storefront homepage template to include the sidebar and the boutique_before_homepage_content hook.
 *
 * Template name: Dump
 *
 * @package birch
 */

get_header(); ?>
<h1>Show Dump</h1>

<?php
//var_dump($wp_styles);
//echo gettype($wp_styles);
//
//foreach ($wp_styles as $key => $value) {
//    echo "$key => $value\n";
//}
?>

<div id="cmb">
	<div id="headingOptions">
		<?php echo get_post_meta( get_the_ID(), 'bho_options', true );?>
	
		<?php	
		
		function birch_heading_chooser(){
			$opt = get_post_meta( get_the_ID(), 'bho_options', true );
			if( $opt == 'image_heading'){
				echo "ih";
			}elseif($opt == "carousel"){
				echo "fs";
			}elseif($opt == 'seasonal'){
				echo"sl";
			}else{
				echo $opt ."none?";
			}
			
		}//bhc()
		
		birch_heading_chooser();
		
		?>
	</div>
</div>


<?php get_footer(); ?>
