
console.log('only loading on a page that requires api');

jQuery(document).ready(function() {
	// Are we on a show page
	if($("section#page--related").length == 1) {
		jQuery.get(
		    ajaxurl, 
		    {
		        'action': 'load_redbull',
		        'data':   page_id
		    }, 
		    function(response){
		        $("section#page--related").html(response);
		    }
		);	
	}
	
})