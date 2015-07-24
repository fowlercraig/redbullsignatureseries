$(document).ready(function($) {

  $('#home--recent-slider.home').royalSlider({
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

  var slider = $('#home--recent-slider.home').data('royalSlider');

  $('#home--recent.home .arrow-left').on('click', function(event){
    event.preventDefault();
    slider.prev();
  });

  $('#home--recent.home .arrow-right').on('click', function(event){
    event.preventDefault();
    slider.next();
  });

});


$(document).ready(function($) {

  $('#home--recent-slider.show').royalSlider({
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
    //visibleNearby: {
    //  enabled: true,
    //  centerArea: 0.95,
    //  center: true,
    //  breakpoint: 650,
    //  breakpointCenterArea: 1,
    //  navigateByCenterClick: true
    //}
  });

  var slider = $('#home--recent-slider.show').data('royalSlider');

  $('#home--recent.show .arrow-left').on('click', function(event){
    event.preventDefault();
    slider.prev();
  });

  $('#home--recent.show .arrow-right').on('click', function(event){
    event.preventDefault();
    slider.next();
  });

});