$(function() {
  if ( $('.search-input').val().length == 0 ) {
    $('.search-submit').attr('disabled', 'disabled');
  }
  $('.search-input').bind('keydown keyup keypress change', function() {
    if ( $(this).val().length > 0 ) {
      $('.search-submit').removeAttr('disabled');
    } else {
      $('.search-submit').attr('disabled', 'disabled');
    }
  });
});
