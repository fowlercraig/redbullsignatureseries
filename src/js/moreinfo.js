function swap() {

 $('.btn-moreinfo').magnificPopup({
   type: 'iframe',
   iframe: {
     markup: '<div id="home--content" class="mfp-iframe-scaler">'+
             '<div id="home--content-close" class="mfp-close ss-icon ss-plus"></div>'+
             '<div id="home--content-loading"></div>'+
             '<iframe style="opacity:0;max-width:100%" class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
             '</div>',
   },
   callbacks: {
     open: function() {
       setTimeout(function(){
         $("#home--content").addClass('fs-swap-active');
         $("#wrapper").addClass('fs-swap-active');
       },200);
       setTimeout(function(){
         $("#home--content-loading").transition({opacity:0},300);
         $(".mfp-iframe").transition({opacity:1},300);
       },1500);
     },
     beforeClose: function() {
      $("#home--content").removeClass('fs-swap-active');
      $("#wrapper").removeClass('fs-swap-active');
     }
   }
 });

}

swap();