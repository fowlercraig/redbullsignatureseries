jQuery(document).ready(function() {
	// Are we on a show page
	if($("#page--related-feed").length == 1) {
		jQuery.get(
		    ajaxurl,
		    {
		        'action': 'load_redbull',
		        'data':   page_id
		    },
		    function(response){
		        $("#page--related-feed").html(response);
		    }
		);
	}

})