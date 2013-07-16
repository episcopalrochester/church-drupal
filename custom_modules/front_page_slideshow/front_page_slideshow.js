var $ = jQuery;

$(document).ready(function() {
  $('#front-slideshow').show();
  $('#front-slideshow .slide-text-container-inner').append('<div class="slide-controls"><a href="#" class="slide-prev">Prev</a><a href="#" class="slide-next">Next</a>');
  var slide_count = $('#edit-slideshow-count').val();
  if ( slide_count ) {
    $('.admin-slide-table.active tbody tr:nth-child('+slide_count+')').addClass("last-slide");
    $('#edit-slideshow-count').change(function() {
      var slide_count = $(this).val();
      $('.admin-slide-table.active tbody tr').each(function() {
        $(this).removeClass('last-slide');
      });
      $('.admin-slide-table.active tbody tr:nth-child('+slide_count+')').addClass("last-slide");
    });
  }
});
