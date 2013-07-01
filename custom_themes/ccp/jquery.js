var $ = jQuery;
$(document).ready(function() {
  var max = -1;
  $('.content-row > div').each(function() {
    var h = $(this).height(); 
    max = h > max ? h : max;
        
  });
  $("#main-content").css({'min-height': max});
});
