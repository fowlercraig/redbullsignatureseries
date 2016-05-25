// @codekit-prepend "featured.js"
// @codekit-prepend "slider.js"
// @codekit-prepend "slider_main.js"
// @codekit-append  "miles.js"
// @codekit-prepend "moreinfo.js"
// @codekit-prepend "videos.js"
// @codekit-prepend "_smoothscroll.js"

function sidebarSizing(){
  $(window).resize(function(){
    var sw = $('#home--shows aside').width();
    $('#sidebar-sticky').css({
      width: sw,
    });
  });

}

function equalized(){

  $("#home--shows").equalize({
    target: ".sizer-item"
  });

  $(window).load(function(){
    $(".equal-parent").equalize({
      target: ".equal"
    });
  });

  // if( $('#sidebar-sticky').length ) {
  //   var sticky = new Waypoint.Sticky({
  //     element: $('#sidebar-sticky')[0],
  //     offset: 80,
  //   });
  // }

  sidebarSizing();
  $(window).resize();

}

function showClick(){

  var d= 0;

  $(".show").not(this).each(function() {
    $(this).delay(d).transition({opacity:0,});
    d += 150;
  });

  setTimeout(function(){
    $(".show").removeAttr( "style" );
  },1500);

}

function headerjunk(){

  var options = {
    classes: {
      clone:   'banner--clone',
      stick:   'banner--stick',
      unstick: 'banner--unstick'
    },
     offset: 100,
  };
  var banner = new Headhesive('#header', options);

}

$(function(){

  $(".mobile-btn").swap();

  $(".content, #page--video, .video-popup").fitVids();
  $(".tab").tabs({
    mobileMaxWidth: '300px'
  });

  setTimeout(function(){
    $('.overlay').removeClass('active');
  },500);

  headerjunk();
  

  $("#home--shows").imagesLoaded( function() {
    equalized();
  });

  $(".show").click(function(event){
    //event.preventDefault();
    //showClick();
  });

  addthisevent.settings({
    css : false,
  });

  $(function() {
    $('a[href*=#]:not([href=#],.tab)').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top - 80
          }, 1000);
          return false;
        }
      }
    });
  });


});