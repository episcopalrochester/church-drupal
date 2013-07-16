var $ = jQuery;
$(document).ready(function() {
  var map_address = $('#sidebar-church-map').attr("data-map-address");
  $('#sidebar-church-map').gmap3({
    marker: {
      address: map_address
    },
    map:{
      options:{
        zoom: 15
      }
    }
  });
  $('#sidebar-church-map').width("100%").height("300px");
});
