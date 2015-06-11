function stickyfeatured(){

  var waypoint = new Waypoint({

    element: document.getElementsByClassName('show'),

    handler: function(direction) {
      $('.show').toggleClass('stuck', direction === 'down');
    },

    offset: 'bottom-in-view'

  })

}