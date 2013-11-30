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
    
    // Get user input
	var text = $(this).val();
    var section = '#' + $(this).closest('div').attr('id');
    var length = text.length;
    var count = 24-length;
    
    // Show error if too long
    if (length >= 25){
        $(section).addClass('has-error').removeClass('has-warning');
        $(section + '_error').html('<strong>' + count + '</strong> Your text is too long').addClass('text-danger').removeClass('text-warning');
    }
    else {
        // Else hide error
        
        $(section + '_error').html('<strong>' + count + '</strong> characters left')
        
        // Show warning when close to limit
        if(length > 19){
            $(section).addClass('has-warning').removeClass('has-error');
            $(section + '_error').addClass('text-warning').removeClass('text-danger');
            
            $(this).blur(function() {
                $(section).removeClass('has-warning has-error');
                $(section + '_error').removeClass('text-warning text-danger');
            });
        }
        else{
            $(section).removeClass('has-warning has-error');
            $(section + '_error').removeClass('text-warning text-danger');
        }
        
        // Get text location
        var location = section + '_text';
        
        // Insert text onto badge
        $(location).html(text);
    }
    
});

/*-------------------------------------------------------------------------------------------------
Color chooser
-------------------------------------------------------------------------------------------------*/
$('.color').change(function() {
    
	// Get chosen color
	var new_color = $(this).val();

	// Get item to change
	var item = $(this).closest('div').attr('id');

    if (item == 'top'||'mid'||'bottom'){
        $('#' + item + '_text').css('color', new_color);
    }
    else{
        $(item).css('fill', new_color);
    }

});
