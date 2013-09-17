var $ = jQuery;
$(document).ready(function() {
  var max = -1;
  $('.content-row > div').each(function() {
    var h = $(this).height(); 
    max = h > max ? h : max;
        
  });
  $("#main-content").css({'min-height': max});
  var footerMax = -1;
  $('.footer-menu > ul > li').each(function() {
    var h = $(this).height();
    footerMax = h > footerMax ? h : footerMax;
    $(this).css({'min-height': footerMax});
  });
  $('.field-name-body img').each(function() {
    if ($(this).css('float') === 'none') {
        $(this).addClass("no-float");
    }
  });
});
