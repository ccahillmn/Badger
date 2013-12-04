/*-------------------------------------------------------------------------------------------------
Image chooser
-------------------------------------------------------------------------------------------------*/
$( document ).ready(function() {
	$(".picker").carouFredSel({
		circular: false,
		infinite: false,
		height: "auto",
		items: {
			visible: 5,
			minimum: 6,
			width: 100,
			height: 100
		},
		auto: false,
		prev		: {
			button		: function() {
				return $(this).parents(".wrapper").find(".prev");
			}
		},
		next		: {
			button		: function() {
				return $(this).parents(".wrapper").find(".next");
			}
		},
	});
});


$('.thumb').click(function() {

	// Get chosen shape
	var new_shape = $(this).html();
	var layer;
	var fill;
    
	if ($(this).hasClass('badges')){
		layer = '#badge';
		fill = badge_color
	}
	else {
		layer = '#icon';
		fill = icon_color;
		
		$('#icon').css('cursor','move').draggable();
	}
	
	// Update the image
	$(layer).html(new_shape);
	$(layer + ' .shape').css('fill', fill);

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
		
		$(location).css('cursor','move').draggable();
    }
    

    
});

/*-------------------------------------------------------------------------------------------------
Color chooser
-------------------------------------------------------------------------------------------------*/

// Init shape colors
var badge_color = '#c32b40';
var icon_color= '#000';

$('.color').change(function() {
    
	// Get chosen color
	var new_color = $(this).val();

	// Get item to change
	var item = $(this).closest('div').attr('id');
	
	switch (item) {
		case 'top':
			$('#top_text').css('color', new_color);
			break;
		
		case 'mid':
			$('#mid_text').css('color', new_color);
			break;
		
		case 'bottom':
			$('#bottom_text').css('color', new_color);
			break;
		
		case 'badge_bg':
			$('#badge .shape').css('fill', new_color);
			badge_color = new_color;
			break;
		
		case 'icon_bg':
			$('#icon .shape').css('fill', new_color);
			icon_color = new_color;
			break;

		case 'preview_bg':
			$('#preview').css('background-color', new_color);
			break;
	}

});
