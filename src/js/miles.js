jQuery(document).ready(function() {
// Are we on a show page
	if($("#page--related-feed").length == 1) {
		$("#page--related-feed").css('opacity','0');
			jQuery.get(
				ajaxurl,{
					'action': 'load_redbull',
					'data':   page_id
				},
				function(response){

					$("#page--related .loading").fadeOut(300);

					setTimeout(function(){

						$("#page--related-feed").html(response).transition({
							opacity:1
						});

            equalized();

					},400);



				}
			);
	}
});