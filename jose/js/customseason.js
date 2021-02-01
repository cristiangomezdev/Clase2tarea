$('section div div div').on("click", function(e) {
  var $this = $(this),
      $id = $this.attr('id'),
      $class = '.' + $('.about-' + $id).attr('class').replace('hide', '');
  
  $('.default-text').addClass('hide');
  $('.about-' + $id).removeClass('hide');
  $('div[class*=about]').not($class).addClass('hide');
});