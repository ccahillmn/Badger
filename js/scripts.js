/*-------------------------------------------------------------------------------------------------
Initialize UI
-------------------------------------------------------------------------------------------------*/
$(document).ready(function(){

	 // Intit tabs and slider UI
	$(function(){
		$( ".slider" ).slider();
		$( "#generator" ).tabs({active:0});
	});
	
	// Init image carousels
	$(".picker").carouFredSel({
		circular: false,
		infinite: false,
		height: "auto",
		width: "variable",
		items: {
			visible: 5,
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
	
	// Init icon resizer
	$("#resize").slider({
		value: 125,
		max: 250,
		min: 0,
		slide: function(event, ui) {
			$( "#icon" ).width(ui.value);
			$( "#icon" ).height(ui.value);
	   }
	});
	
	// Init icon rotator
	$("#icon_rotate").slider({
		value: 0,
		max: 180,
		min: -180,
		slide: function(event, ui) {
			$( "#icon" ).css({ 
				'WebkitTransform': 'rotate(' + ui.value + 'deg)',
				 '-moz-transform': 'rotate(' + ui.value + 'deg)',
				 '-ms-transform':'rotate('+ ui.value +'deg)',
			});
		}
	});
	
	// Init text rotators
    $( ".rotate").each(function() {
	
		var item = $(this).closest('div.row').attr('id');
		
		$( this ).slider({
			value: 0,
			max: 180,
			min: -180,
			slide: function(event, ui) {
				$("#" + item + "_text").css({ 
					'WebkitTransform': 'rotate(' + ui.value + 'deg)',
					 '-moz-transform': 'rotate(' + ui.value + 'deg)',
					 '-ms-transform':'rotate('+ ui.value +'deg)',
				});
			}
		});
    });	
});	

/*-------------------------------------------------------------------------------------------------
Image chooser
-------------------------------------------------------------------------------------------------*/

$('.thumb').click(function() {

	// Get chosen shape
	var new_shape = $(this).html();
	var layer;
	var fill;
    
	// Get element to update
	if ($(this).hasClass('badges')){
		layer = '#badge';
		fill = badge_color
	}
	else {
		layer = '#icon';
		fill = icon_color;
		
		$('#icon').css('cursor','move').draggable({ containment: "parent" });
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
        
        // Insert text onto preview
        $(location).html(text);
		
		// Make text draggable
		$(location).css('cursor','move').draggable({ containment: "parent" });
		
		// Dynamically center text
		var margin = (256-$(section + '_text').width())/2;
		$(section + '_text').css('left', margin);
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

	// Get element to change
	var item = $(this).closest('div').attr('id');
	
	// Update element color
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

/*-------------------------------------------------------------------------------------------------
Reset interface
-------------------------------------------------------------------------------------------------*/

$("#reset").click(function() {

	// Empty Text
	$("#text input").val("");
	
	// Reset Sliders
	$("#icon, #badge, #preview p").html("").css({ 
				'WebkitTransform': 'rotate(0deg)',
				 '-moz-transform': 'rotate(0deg)',
				 '-ms-transform':'rotate(0deg)',
			});
	$("#resize").slider({value: 125});
	$("#rotate, .rotate").slider({value: 0});
	
	// Reset Colors
	$('.color').each(function(){
	    
	    var item = $(this).attr('id');
	    
        switch (item) {
		case 'topcolor': case 'midcolor': case 'bottomcolor':
			var defaultColor = '#2C3E50';
			var textColor = '#fff';
			$("#preview p").css('color',defaultColor);
			break;
		case 'badgecolor':
			var defaultColor = '#C32B40';
			var textColor = '#fff';
			badge_color = defaultColor;
			break;
		case 'iconcolor':
			var defaultColor = '#000000';
			var textColor = '#fff';
			icon_color = defaultColor;
			break;
		case 'bbgcolor':
			var defaultColor = '#ffffff';
			var textColor = '#000';
			$('#preview').css('background-color', defaultColor);
        }
        $(this).val(defaultColor);
        $(this).css('background-color',defaultColor);
        $(this).css('color',textColor);
	});
});
