<?php
/*****	Twitter Bootstrap js	*****/
?>
elgg.provide('elgg.tbs');

elgg.tbs.init = function() {

	$(".alert-success").delay(3000).slideUp("slow", function(){$(this).remove();});		//	delays a success message for 3 seconds then removes it
	
/*****	bootstrap-select	*****/	
	$('.elgg-input-access').selectpicker({					//	read access
    style: 'btn-sm btn-success',
    size: 'auto',
	});
/*	
	$('#elgg-river-selector').selectpicker({				//	river selector
    style: 'btn-sm',
    });
*/	

/*****	end bootstrap-select	*****/	

/***** likes tooltip	*****/

$(".elgg-menu-item-likes-count a").tooltip({
	container: 'body',
});

/*****	likes popover	*****/

$(".elgg-menu-item-likes-count a").popover({
	container: 'body',
	placement: 'top',
	html: true,
	content: function(){
	return $(this).parent().children(".elgg-likes").html();
	},
});

/*	don't show the river comment form unless the user is logged in	*/
	if (!elgg.is_logged_in()) {
		$('.form-horizontal').hide();
		$('.elgg-river-comments li:last-child').css('border-bottom', '1px solid #D4D4D4');
	}

};		//	end elgg.tbs.init

elgg.register_hook_handler('init', 'system', elgg.tbs.init);
