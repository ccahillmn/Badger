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
    
	if ($(this).closest('div').hasClass('badges')){
		var layer = '#badge';
	}
	else {
		var layer = '#icon';
	}

	// Update the badge image
	$(layer).attr('src', new_shape);

});


/*-------------------------------------------------------------------------------------------------
Text input
-------------------------------------------------------------------------------------------------*/

$('.text').keyup(function(){
    
    var location = '#' + $(this).parent().attr('id') + '_text';
    
    $(location).html($(this).val());
    
});

/*-------------------------------------------------------------------------------------------------
Color chooser
-------------------------------------------------------------------------------------------------*/
$('.color').change(function() {
    
	// Get chosen color
	var new_color = $(this).val();

	// Get item to change
	var item = $(this).parent().attr('id');

    if (item == 'top'||'mid'||'bottom'){
        $('#' + item + '_text').css('color', new_color);
    }
    else{
        $(item).css('fill', new_color);
    }

});
