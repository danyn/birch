<?php


function birch_image_heading_css(){
// Grab the metadata from the database
$heading_background_color = get_post_meta( get_the_ID(), 'birch_heading_background_color', true );
$heading_image = get_post_meta( get_the_ID(), 'birch_heading_image', true );

	
	?>
	<style>
		/*css for the image heading if displayed this get printed into the head tag*/
		.image-heading{
			height:230px;
		 	background-color: <?php  echo $heading_background_color; ?>;
		}
		
		.image_heading_statement{

/*			padding-top:32px;*/
/*			padding-bottom:10%;*/
			font-size: 22px;
			color: black;
			line-height: 1.4;
			margin-left:auto;
			margin-right:auto;
			width:320px;
			text-align: center;
		}
		@media(min-width:768px){
			.image-heading{
			background-repeat: no-repeat;
			background-position:top right;
		
			background-image : url(<?php echo $heading_image; ?>)
			}
			.image_heading_statement{
				margin-left:6%;		
			}
		}
		
		@media(min-width:898px){
			.image_heading_statement{
				width:420px;
				font-size: 26px;
			}
		}
	</style>
		
		<?php	
}//birch_image_heading_css

add_action('wp_head', 'birch_image_heading_css',100);
add_action('admin_head', 'birch_image_heading_css',100);

function birch_image_heading(){
	$heading_text =  get_post_meta( get_the_ID(), 'birch_heading_text', true );
	$subheading_text =  get_post_meta( get_the_ID(), 'birch_Subheading_text', true );
		?>	 
	 	<div class="image-heading" >
			<div class="image_heading_statement" id="ih_statement">
				<?php echo $heading_text;?>
			</div>
			<div class="image_heading_statement" id="ih_substatement">
				<?php echo $subheading_text;?>
			</div>
	 	</div>
	 	 
	<?php
}

 add_action('storefront_before_content','birch_image_heading'); 
