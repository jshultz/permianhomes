jQuery(document).ready(function ($) {

	$('li.has-flyout').hover(function() {
		$(this).addClass('hover')
	},function() {
		$(this).removeClass('hover')
	});

    $("#upper-tabs").tabs({

    });

    $("#odessa-tabs").tabs({

    });

    $( "#contact" ).validate({
        rules: {
            human: "required",
            human_again: {
                equalTo: "#human"
            }
        }
    });

    $( "#warranty" ).validate({
        rules: {
            human: "required",
            human_again: {
                equalTo: "#human"
            }
        }
    });

    Placeholders.init({
        live: true, //Apply to future and modified elements too
        hideOnFocus: true //Hide the placeholder when the element receives focus
    })

});

	
