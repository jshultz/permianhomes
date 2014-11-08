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

    Placeholders.init({
        live: true, //Apply to future and modified elements too
        hideOnFocus: true //Hide the placeholder when the element receives focus
    })

});

	
