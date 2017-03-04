<?php


function birch_slider_heading_css(){
?>
<style id="flexslider">
/*	the container birch styles*/
	
	
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

		

   ol.flex-control-nav.flex-control-thumbs li img{
    padding: 2px 26px;
    height: 38px;
                                                  

   }


}
	
	
	
	
	
	.birch-slider{
		position:relative;
		max-height: 100vh;
		overflow: hidden;
	}
	
	.birch-slider ul.slides img {
    width:100%;
    height:auto;
}
	
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
    border-radius:90px;
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

	
	
/*
 * jQuery FlexSlider v2.6.3
 * http://www.woothemes.com/flexslider/
 *
 * Copyright 2012 WooThemes
 * Free to use under the GPLv2 and later license.
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Contributing author: Tyler Smith (@mbmufffin)
 *
 */
/* ====================================================================================================================
 * FONT-FACE
 * ====================================================================================================================*/
@font-face {
  font-family: 'flexslider-icon';
  src: url('fonts/flexslider-icon.eot');
  src: url('fonts/flexslider-icon.eot?#iefix') format('embedded-opentype'), url('fonts/flexslider-icon.woff') format('woff'), url('fonts/flexslider-icon.ttf') format('truetype'), url('fonts/flexslider-icon.svg#flexslider-icon') format('svg');
  font-weight: normal;
  font-style: normal;
}
/* ====================================================================================================================
 * RESETS
 * ====================================================================================================================*/
.flex-container a:hover,
.flex-slider a:hover {
  outline: none;
}
.slides,
.slides > li,
.flex-control-nav,
.flex-direction-nav {
  margin: 0;
  padding: 0;
  list-style: none;
}
.flex-pauseplay span {
  text-transform: capitalize;
}
/* ====================================================================================================================
 * BASE STYLES
 * ====================================================================================================================*/
.flexslider {
  margin: 0;
  padding: 0;
}
.flexslider .slides > li {
  display: none;
  -webkit-backface-visibility: hidden;
}
.flexslider .slides img {
  width: 100%;
  display: block;
}
.flexslider .slides:after {
  content: "\0020";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}
html[xmlns] .flexslider .slides {
  display: block;
}
* html .flexslider .slides {
  height: 1%;
}
.no-js .flexslider .slides > li:first-child {
  display: block;
}
/* ====================================================================================================================
 * DEFAULT THEME
 * ====================================================================================================================*/
.flexslider {
  margin: 0 0 60px;
  background: #fff;
  border: 4px solid #fff;
  position: relative;
  zoom: 1;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: '' 0 1px 4px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: '' 0 1px 4px rgba(0, 0, 0, 0.2);
  -o-box-shadow: '' 0 1px 4px rgba(0, 0, 0, 0.2);
  box-shadow: '' 0 1px 4px rgba(0, 0, 0, 0.2);
}
.flexslider .slides {
  zoom: 1;
}
.flexslider .slides img {
  height: auto;
  -moz-user-select: none;
}
.flex-viewport {
  max-height: 2000px;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -ms-transition: all 1s ease;
  -o-transition: all 1s ease;
  transition: all 1s ease;
}
.loading .flex-viewport {
  max-height: 300px;
}
.carousel li {
  margin-right: 5px;
}
.flex-direction-nav {
  *height: 0;
}
.flex-direction-nav a {
  text-decoration: none;
  display: block;
  width: 40px;
  height: 40px;
  margin: -20px 0 0;
  position: absolute;
  top: 50%;
  z-index: 10;
  overflow: hidden;
  opacity: 0;
  cursor: pointer;
  color: rgba(0, 0, 0, 0.8);
  text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3);
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.flex-direction-nav a:before {
  font-family: "flexslider-icon";
  font-size: 40px;
  display: inline-block;
  content: '\f001';
  color: rgba(0, 0, 0, 0.8);
  text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3);
}
.flex-direction-nav a.flex-next:before {
  content: '\f002';
}
.flex-direction-nav .flex-prev {
  left: -50px;
}
.flex-direction-nav .flex-next {
  right: -50px;
  text-align: right;
}
.flexslider:hover .flex-direction-nav .flex-prev {
  opacity: 0.7;
  left: 10px;
}
.flexslider:hover .flex-direction-nav .flex-prev:hover {
  opacity: 1;
}
.flexslider:hover .flex-direction-nav .flex-next {
  opacity: 0.7;
  right: 10px;
}
.flexslider:hover .flex-direction-nav .flex-next:hover {
  opacity: 1;
}
.flex-direction-nav .flex-disabled {
  opacity: 0!important;
  filter: alpha(opacity=0);
  cursor: default;
  z-index: -1;
}
.flex-pauseplay a {
  display: block;
  width: 20px;
  height: 20px;
  position: absolute;
  bottom: 5px;
  left: 10px;
  opacity: 0.8;
  z-index: 10;
  overflow: hidden;
  cursor: pointer;
  color: #000;
}
.flex-pauseplay a:before {
  font-family: "flexslider-icon";
  font-size: 20px;
  display: inline-block;
  content: '\f004';
}
.flex-pauseplay a:hover {
  opacity: 1;
}
.flex-pauseplay a.flex-play:before {
  content: '\f003';
}
.flex-control-nav {
  width: 100%;
  position: absolute;
  bottom: -40px;
  text-align: center;
}
.flex-control-nav li {
  margin: 0 6px;
  display: inline-block;
  zoom: 1;
  *display: inline;
}
.flex-control-paging li a {
  width: 11px;
  height: 11px;
  display: block;
  background: #666;
  background: rgba(0, 0, 0, 0.5);
  cursor: pointer;
  text-indent: -9999px;
  -webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
  -o-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
  box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
}
.flex-control-paging li a:hover {
  background: #333;
  background: rgba(0, 0, 0, 0.7);
}
.flex-control-paging li a.flex-active {
  background: #000;
  background: rgba(0, 0, 0, 0.9);
  cursor: default;
}
.flex-control-thumbs {
  margin: 5px 0 0;
  position: static;
  overflow: hidden;
}
.flex-control-thumbs li {
  width: 25%;
  float: left;
  margin: 0;
}
.flex-control-thumbs img {
  width: 100%;
  height: auto;
  display: block;
  opacity: .7;
  cursor: pointer;
  -moz-user-select: none;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -ms-transition: all 1s ease;
  -o-transition: all 1s ease;
  transition: all 1s ease;
}
.flex-control-thumbs img:hover {
  opacity: 1;
}
.flex-control-thumbs .flex-active {
  opacity: 1;
  cursor: default;
}
/* ====================================================================================================================
 * RESPONSIVE
 * ====================================================================================================================*/
@media screen and (max-width: 860px) {
  .flex-direction-nav .flex-prev {
    opacity: 1;
    left: 10px;
  }
  .flex-direction-nav .flex-next {
    opacity: 1;
    right: 10px;
  }
}
/*==================================================================================================================
* birch masthead	
==================================================================================================================*/
header#masthead.site-header {
    background-color: rgba(0, 0, 0, 0.66);
    color: white;
    position: absolute;
    width: 100%;
}	
</style>

<?php
}//birch_slider_heading_css
add_action('wp_head', 'birch_slider_heading_css',100);
add_action('admin_head', 'birch_slider_heading_css',100);

function birch_slider_heading_js(){
?>	
	<script id="birch_slider">
		jQuery( document ).ready( function( $ ) {
				// $() will work as an alias for jQuery() inside of this function

				console.log("birch some script file is working");


		//	make a slideshow with flexslider http://flexslider.woothemes.com/index.html
			 $('.birch-slider').flexslider({
				animation: "slide",
				 controlNav: "thumbnails"
			});


} );
</script>
	
<?php	
}//birch_slider_heading_js
add_action('wp_footer','birch_slider_heading_js');





function birch_slider_heading(){
?>
	<div class="birch-slider">
		<ul class="slides">
			<li class="a"
			 data-thumb="<?php echo get_stylesheet_directory_uri()?>\images\shoe-logos\resized\converse.png">
				<img src="<?php echo get_field('slide_1')['url']?>" alt="">
<!--			<a href="#" class="button"><i class="fa fa-snowflake-o" aria-hidden="true"></i>more</a>-->
			</li>
			<li class="b"
				 data-thumb="<?php echo get_stylesheet_directory_uri()?>\images\shoe-logos\resized\dress.png">
				
					<img src="<?php echo get_field('slide_2')['url']?>" alt="">
<!--				<a href="#" class="button"><i class="fa fa-free-code-camp" aria-hidden="true"></i>more</a>-->
			</li>
			<li class="c"
				 data-thumb="<?php echo get_stylesheet_directory_uri()?>\images\shoe-logos\resized\high-heel.png">
			
			<img src="<?php echo get_field('slide_3')['url']?>" alt="">
<!--				<a href="#" class="button">more</a>-->
			</li>
		</ul>
	</div>
	
	
<?php
}//birch_slider_header

add_action('storefront_before_content','birch_slider_heading'); 
//jQuery FlexSlider v2.6.3	
wp_enqueue_script('FlexSlider', get_stylesheet_directory_uri() . '/js/jquery.flexslider-min.js', ['jquery']);


