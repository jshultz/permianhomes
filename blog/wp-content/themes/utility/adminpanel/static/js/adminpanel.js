	jQuery(document).ready(function() {
		jQuery('.rm_options').slideUp();

		jQuery('.rm_section h3').click(function(){
			if(jQuery(this).parent().next('.rm_options').css('display')=='none') {
				jQuery(this).removeClass('inactive');
				jQuery(this).addClass('active');
				jQuery(this).children('img').removeClass('inactive');
				jQuery(this).children('img').addClass('active');
			} else {
				jQuery(this).removeClass('active');
				jQuery(this).addClass('inactive');
				jQuery(this).children('img').removeClass('active');
				jQuery(this).children('img').addClass('inactive');
			}
			jQuery(this).parent().next('.rm_options').slideToggle('slow');
		});

		jQuery('.disable_section').click( function() {
			var id = this.id;
			var val = id.split('_section');
			if (jQuery('#' + id).is(':checked')) {
				jQuery('#' + val[0] + '_row').show('slow');
				jQuery('#' + val[0] + '_numposts_row').show('slow');
				jQuery('#' + id).attr('value', 1);
			} else {
				jQuery('#' + val[0] + '_row').hide('slow');
				jQuery('#' + val[0] + '_numposts_row').hide('slow');
				jQuery('#' + id).attr('value', 0);
				//jQuery('#' + val[0]).disabled = true;
				//jQuery('#' + val[0] + '_numposts_row').disabled = true;
			}
		});
	});