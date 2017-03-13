<?php

function media_fullpage(){
?>
   <div class="media_full_page">
<!--
		<div class="half_mfp">
			<div></div>
			<div></div>
		</div>
-->
		<div class="full_mfp">
			<div><span class="play"></span></div>
			<div><span class="play"></span></div>
		</div>
		
			<div class="full_social_mfp">
			<div></div>
			
		</div>
		
			<div class="full_mfp">
			<div>
					<span class="play"></span>
			</div>
			
		</div>
	</div>
<style>
	<?php
		$a ="url(" .get_stylesheet_directory_uri()."/images/media-layout/owl.jpg)";
	  $button = "url(" .get_stylesheet_directory_uri()."/images/media-layout/play_button.png)";
	
	
		
	?>
	body{padding:0;margin:0!important;}
		.half_mfp, .full_mfp{
			border-radius:2px;
			margin:2px;
			box-sizing: border-box;
			display:block;
		}
		.half_mfp div{
			background: #04a1b5;
			width:50%;
		
			border:1px solid orange;
			
		}
		.full_mfp div{
			position: relative;
/*			border:1px solid purple;*/
			background:<?php echo $a ?>;
			background-repeat: no-repeat;
			background-size: cover;
			
		}
/*	.play*/
	
	.play{
	
	  position:absolute;
		background: <?php echo $button; ?>;
		display: block !important;
		width: 75px;
		height	: 75px;
		background-repeat: no-repeat;
		background-size: cover;
	
	
	
		
		}
	
		.full_social_mfp div{
			border:1px solid purple;
			background: #2767AF;
		}
</style>

<script>
		var  widthHalf=  jQuery('.half_mfp div').width(); 
		var  widthWhole= jQuery('.full_mfp div').width(); 
	  var play = jQuery('.play');
	 var playSize = widthWhole * 0.4;
	  play.css({'height':playSize,'width':playSize })
	   var playVert = (widthWhole/2 - play.height()/2) + "px";
	  play.css({"top": playVert , "left": playVert });
	 
		 jQuery('.half_mfp div').height(widthHalf);
	   jQuery('.full_mfp div').height(widthWhole);
		jQuery('.full_social_mfp div').height(widthWhole*0.39);

			jQuery(window).resize(function(){
				
				playSize = widthWhole * 0.4;
	  		play.css({'height':playSize,'width':playSize })
				
				widthHalf= jQuery('.half_mfp div').width(); 
				widthWhole= jQuery('.full_mfp div').width();
				playVert = (widthWhole/2 - play.height()/2) + "px";
	  		play.css({"top": playVert , "left": playVert });
				jQuery('.half_mfp div').height(widthHalf);
				jQuery('.full_mfp div').height(widthWhole);
				jQuery('.full_social_mfp div').height(widthWhole*0.39);
});
	</script>

<?php	
}