(function($){
  $('#search-submit').focus(function(e){
    e.preventDefault();
   $('#search-field').css('width','200px');
    $('#search-field').focus();

  });
  $('#search-submit').blur(function(e){
    e.preventDefault();
   $('#search-field').css('width', '0');

  });
})(jQuery);