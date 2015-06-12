jQuery(document).ready(function($) {

  $('#home--above').royalSlider({
    arrowsNav: true,
    arrowsNavAutoHide: false,
    fadeinLoadedSlide: false,
    controlNavigationSpacing: 0,
    controlNavigation: 'bullets',
    imageScaleMode: 'none',
    imageAlignCenter:false,
    blockLoop: true,
    loop: true,
    numImagesToPreload: 6,
    transitionType: 'fade',
    keyboardNavEnabled: true,
    block: {
      delay: 400
    },
    autoPlay: {
      // autoplay options go gere
      enabled: true,
      pauseOnHover: true
    }
  });

  var slider = $('#home--above').data('royalSlider');

  $('#home--recent .arrow-left').on('click', function(event){
    event.preventDefault();
    slider.prev();
  });

  $('#home--recent .arrow-right').on('click', function(event){
    event.preventDefault();
    slider.next();
  });

});