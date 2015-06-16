// @codekit-prepend "featured.js"
// @codekit-prepend "slider.js"
// @codekit-prepend "slider_main.js"
// @codekit-append "miles.js"
// @codekit-prepend "moreinfo.js"
// @codekit-prepend "videos.js"

function equalized(){

  $("#page--related-feed").equalize({
    target: "article"
  });

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

  $(".content").fitVids();

  setTimeout(function(){
    $('.overlay').removeClass('active');
  },500);

  headerjunk();

  $(".show").click(function(event){
    //event.preventDefault();
    //showClick();
  });

  addthisevent.settings({
    css : false,
  });


});