/*-------------------------------------------------------------------------------------------------
Image chooser
-------------------------------------------------------------------------------------------------*/
$(document).ready(function(){
    $("#badges").als({
        visible_items: 4,
        scrolling_items: 4,
        orientation: "horizontal",
        circular: "no",
        autoscroll: "no"
    });
    $("#icons").als({
        visible_items: 4,
        scrolling_items: 4,
        orientation: "horizontal",
        circular: "no",
        autoscroll: "no"
    });
});

$('.thumb').click(function() {

	// Get chosen shape
	var new_shape = $(this).attr('src');

	// Get shape type
	var type = $(this).closest('div').attr('id');

	if (type == 'badge_shapes'){
		var layer = '#badge';
	}
	else if (type == 'icon_shapes'){
		var layer = '#icon';
	}

	// Change the background image of the badge
	$(layer).css('background-image', 'url(' + new_shape + ')');

});
