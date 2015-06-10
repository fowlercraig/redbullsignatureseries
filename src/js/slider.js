jQuery(document).ready(function($) {
  //jQuery.rsCSS3Easing.easeOutBack = 'cubic-bezier(0.175, 0.885, 0.320, 1.275)';
  $('#home--recent-slider').royalSlider({
    arrowsNav: true,
    arrowsNavAutoHide: false,
    //fadeinLoadedSlide: false,
    controlNavigationSpacing: 0,
    controlNavigation: 'bullets',
    imageScaleMode: 'none',
    imageAlignCenter:false,
    blockLoop: true,
    loop: true,
    //numImagesToPreload: 6,
    //transitionType: 'fade',
    keyboardNavEnabled: true,
    addActiveClass: true,
    //block: {
    //  delay: 400
    //}
    visibleNearby: {
      enabled: true,
      centerArea: 0.95,
      center: true,
      breakpoint: 650,
      breakpointCenterArea: 1,
      navigateByCenterClick: true
    }
  });
});