/*-------------------------------------------------------------------------------------------------
Image chooser
-------------------------------------------------------------------------------------------------*/
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