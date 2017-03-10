jQuery( document ).ready( function( $ ) {
    // $() will work as an alias for jQuery() inside of this function 
    
		console.log("birch cmb.js ");
		
	
//		console.log(heading_background_color);
//	birch_heading_background_color
	
		$('#birch_heading_background_color').wpColorPicker({
			
			
			
				color: false,
				mode: 'rgb',
				controls: {
						horiz: 's', // horizontal defaults to saturation
						vert: 'l', // vertical defaults to lightness
						strip: 'h' // right strip defaults to hue
				},
				hide: true, // hide the color picker by default
				border: true, // draw a border around the collection of UI elements
				target: false, // a DOM element / jQuery selector that the element will be appended within. Only used when called on an input.
				width: 400, // the width of the collection of UI elements
				palettes: [ '#e0dfe5', '#ff834c', '#4fa2c0', '#0bc991' ], // show a palette of basic colors beneath the square.

			
    /**
     * @param {Event} event - standard jQuery event, produced by whichever
     * control was changed.
     * @param {Object} ui - standard jQuery UI object, with a color member
     * containing a Color.js object.
     */
    change: function (event, ui) {
        var element = event.target;
        var color = ui.color.toString();
			  
			image_heading = $(".image-heading");
			image_heading.css('background-color', color);

        // Add your code here
    },

    /**
     * @param {Event} event - standard jQuery event, produced by "Clear"
     * button.
     */
    clear: function (event) {
        var element = jQuery(event.target).siblings('.wp-color-picker')[0];
        var color = '';

       // if (element) {
            // Add your code here
      //  }
    }
});//.wpColorPicker object
	
	$("input").change(function(){
			$("#ih_statement").html($("#birch_heading_text").val());

			$("#ih_substatement").html($("#birch_Subheading_text").val());
			
			$(".image-heading").css("background-image",'url("' + $("#birch_heading_image").val() + '")');
	
	});
	
//$(".media-toolbar-primary.search-form .button.media-button.media-button-select").click(function(){
//	$(".image-heading").css("background-image",'url("' + $("#birch_heading_image").val() + '")');
//	alert('werwe');
//	})

	
	
	
	MutationObserver = window.MutationObserver || window.WebKitMutationObserver;

var observer = new MutationObserver(function(mutations, observer) {
    // fired when a mutation occurs
//    console.log(mutations, observer);
    // ...
	$(".image-heading").css("background-image",'url("' + $("#birch_heading_image").val() + '")');
});

// define what element should be observed by the observer
// and what types of mutations trigger the callback
observer.observe(document, {
  subtree: true,
  attributes: true
  //...
});

	
} );//document.ready


