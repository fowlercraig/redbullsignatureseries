$(document).ready(function(){

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
    autoHeight: true,
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

  $('#home--above .arrow-left').on('click', function(event){
    event.preventDefault();
    slider.prev();
  });

  $('#home--above .arrow-right').on('click', function(event){
    event.preventDefault();
    slider.next();
  });

});