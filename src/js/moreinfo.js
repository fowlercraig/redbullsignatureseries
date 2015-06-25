function swap() {

 $('.btn-moreinfo').magnificPopup({
   type: 'iframe',
   iframe: {
     markup: '<div id="home--content" class="mfp-iframe-scaler">'+
             '<div id="home--content-close" class="mfp-close ss-icon ss-plus"></div>'+
             '<a id="home--content-newwindow" class="ss-gizmo ss-expand" target="blank"></a>'+
             '<div id="home--content-loading"></div>'+
             '<iframe style="opacity:0;max-width:100%" class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
             '</div>',
   },
   callbacks: {
     open: function() {
        
       var magnificPopup = $.magnificPopup.instance,
                     cur = magnificPopup.st.el;
                     link = cur.attr('href');
       if (link=='') {
        $('#home--content-newwindow').hide();
       } else {
        $('#home--content-newwindow').attr('href',link);
       }
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