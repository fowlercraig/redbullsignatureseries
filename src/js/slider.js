$(document).ready(function($) {

  $('#home--recent-slider').royalSlider({
    arrowsNav: false,
    arrowsNavAutoHide: false,
    controlNavigationSpacing: 0,
    controlNavigation: 'none',
    imageAlignCenter:false,
    blockLoop: true,
    loop: true,
    autoHeight: true,
    keyboardNavEnabled: true,
    addActiveClass: true,
    visibleNearby: {
      enabled: true,
      centerArea: 0.95,
      center: true,
      breakpoint: 650,
      breakpointCenterArea: 1,
      navigateByCenterClick: true
    }
  });

  var slider = $('#home--recent-slider').data('royalSlider');

  $('#home--recent .arrow-left').on('click', function(event){
    event.preventDefault();
    slider.prev();
  });

  $('#home--recent .arrow-right').on('click', function(event){
    event.preventDefault();
    slider.next();
  });

});