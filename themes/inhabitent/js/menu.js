(function($){
  $('#search-submit').click(function(e){
    e.preventDefault();
    $('#search-field').animate({
      width:'250px'
    },350);
    $('#search-field').focus();
    // $(document).keypress(function(e) {//detecting enter key for search
    //   if(e.which === 13) {
        $('.search-form').submit();
      // }
  // });
});

  $('#search-field').blur(function(e){
    e.preventDefault();
    $('#search-field').animate({
      width: "0"},350);

  });



})(jQuery);