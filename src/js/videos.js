function videos(){
	$('.popup-video').magnificPopup({
	    //delegate: 'a',
	    type: 'inline',
	    callbacks: {
	        open: function() {

	            // https://github.com/dimsemenov/Magnific-Popup/issues/125
	            $('html').css('margin-right', 0);

	            // Play video on open:
	            $(this.content).find('video')[0].play();

	        },
	        close: function() {

	            // Reset video on close:
	            $(this.content).find('video')[0].load();

	        }
	    }
	});
}

videos();

$(window).resize(function(){

	$('.video-popup video').each(function() {

		var ww    = $(window).width();
		var vh    = $(this).attr('height');
		var vw    = $(this).attr('width');
		var vrw   = $(this).width();
		var ogh   = 720;
		var ogw   = 1280;
		var ratio = 720/1280;
		var calc  = vrw*ratio;

		$('.video-popup video').attr('width', ww-16).attr('height', calc);

	});


}).resize();