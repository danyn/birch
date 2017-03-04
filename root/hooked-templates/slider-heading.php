<?php


function birch_slider_heading_css(){



?>
<style id="flexslider">
/*	the container birch styles*/
	<?php 	include ("slider.css");?>

/************************
* use background images
***********************/
	#heading-slider .birch-slider ul.slides li img{

	}
	
	
	.birch-slider{
		position:relative;
		height: 100vh;
	}
	
	.birch-slider ul.slides img {
/*  	height:100vh;*/
/*		display:none;*/
		position: absolute;
    width: 50%;
    left: 0;
    right: 0;
    margin: 0 auto;
    bottom: 179px;
    border: 3px solid black;
}
	
	.birch-slider ul.slides li {
  	height:100vh;
	position: relative;
}
	
	
	li.a,li.b,li.c{
		background-size: cover;
	}
	li.a{
		background-image: url(<?php echo get_field('slide_1')['url']?>);
		
	}
	
	li.b{
		background-image: url(<?php echo get_field('slide_2')['url']?>);
	}
	
	li.c{
		background-image: url(<?php echo get_field('slide_3')['url']?>);
	
	}
	
/*
	
	this should go inside a media query style the woocommerce message popups
	
	*/
	
	.woocommerce-message {
    position: absolute;
    top: 88px;
    right: 50px;
    width: 33.33%;
}
	
	
/*	media queries on the nav-buttons*/
	@media (max-width:700px){
		.birch-slider{
		
		}
		.slides img{

		}

		ol.flex-control-nav.flex-control-thumbs{
			top:0!important;
			padding-top:60px;
			width:204px;
			right:0;
			margin-bottom:0 !important;
			height:100%;
		}
   ol.flex-control-nav.flex-control-thumbs li {
        display: block;
		 		margin:5px 5px;
		 		width:auto !important;
        
       

   }

   ol.flex-control-nav.flex-control-thumbs li img{
      padding: 3px 60px;
    	height: 65px;
    	box-sizing: content-box;
		  border-radius:11px;
		
                                                  

   }


}
	
	
	@media (max-width:520px){

			li.c{
	
	background-position-x: -200px;
    background-position-y: 0;
	}
		

   ol.flex-control-nav.flex-control-thumbs li img{
    padding: 2px 26px;
    height: 38px;
                                                  

   }


}
	
	
	
	
	
	
/*****************************
*Navigational Thumbnails
******************************/
	
.flex-control-thumbs img {
    width: auto !important;
	}
	
	
	ol.flex-control-nav.flex-control-thumbs {
    position: absolute;
    bottom: 26px;
		margin-bottom: 25px !important;
}
	
.flex-control-thumbs li  img {
    border:4px solid white;
    border-radius:33px;
    padding:15px;
    background-color:rgba(255, 255, 255, 0.77);
		margin: 0 auto;

}	
	
	.flex-control-thumbs li img.flex-active {
    background-color:rgba(91, 171, 125, 0.6) !important;
}
	
	.flex-control-thumbs li{
		float: none !important;
		width: 18% !important;
	}
	
/***************************************
*	water mark
******************************************************************/
	div.water-mark{
		background:url(<?php echo get_stylesheet_directory_uri()?>/images/shoe-logos/quality.png);
		width:200px;
		height:200px;
		background-size:cover;
		position:absolute;
		top:100px;
		left:100px;
		background-color: rgba(255, 255, 255, 0.6);
    	border-radius: 100px;
		
	}
	

/***************************************
* birch masthead	
*
*****************************************/
header#masthead.site-header {
    background-color: rgba(0, 0, 0, 0.66);
    color: white;
    position: absolute;
    width: 100%; 
}	
   

 


/********************************************************************************************
* fade in the slide with css3 keyframe animation otherwise it does some jagged stuff on load
**********************************************************************************************/

#heading-slider {   
	/*background-image: url(<?php echo get_field('slide_1')['url']?>);*/
}
.birch-slider{
    -webkit-animation: fadein 2s; 
    /*   -moz-animation: fadein 1s; 
        -ms-animation: fadein 1s; 
         -o-animation: fadein 1s; 
            animation: fadein 1s;*/
}

@keyframes fadein {
    0% { opacity: 0; display:none;}
	50% {opacity: 0;display:block;}
    100%   { opacity: 1; }
}

/*@-moz-keyframes fadein {
    0% { opacity: 0; }
    100%   { opacity: 1; }
}

/
@-webkit-keyframes fadein {
    0% { opacity: 0; }
    100%   { opacity: 1; }
}

 
@-ms-keyframes fadein {
0% { opacity: 0; }
    100%   { opacity: 1; }
}

@-o-keyframes fadein {
    0% { opacity: 0; }
    100%   { opacity: 1; }
}
*/
	
/*	animate .water-mark*/
	.water-mark{
		animation: mark 2.2s;
	}
	
	@keyframes mark {
0%, 100%, 60%, 75%, 90% {
    -webkit-animation-timing-function: cubic-bezier(0.215,.61,.355,1);
    animation-timing-function: cubic-bezier(0.215,.61,.355,1);
}
0% {
    opacity: 0;
    -webkit-transform: translate3d(0,3000px,0);
    transform: translate3d(0,3000px,0);
}
60% {
    opacity: 1;
    -webkit-transform: translate3d(0,-20px,0);
    transform: translate3d(0,-20px,0);
}
75% {
    -webkit-transform: translate3d(0,10px,0);
    transform: translate3d(0,10px,0);
}
90% {
    -webkit-transform: translate3d(0,-5px,0);
    transform: translate3d(0,-5px,0);
}
100% {
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
}
}

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


