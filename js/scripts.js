/*-------------------------------------------------------------------------------------------------
Image chooser
-------------------------------------------------------------------------------------------------*/
$(document).ready(function(){
    $(".als-container").als({
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
    
	if (type == 'als-viewport_0'){
		var layer = '#badge';
	}
	else if (type == 'als-viewport_1'){
		var layer = '#icon';
	}

	// Change the background image of the badge
	$(layer).css('background-image', 'url(' + new_shape + ')');

});


$('#text input').keyup(function(){
    
    var location = '#' + $(this).attr('id') + '_text';
    
    $(location).html($(this).val());
    
});