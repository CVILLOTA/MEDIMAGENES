$( document ).ready(function(){

  $('.materialboxed').materialbox();

  $('.parallax').parallax();

  $('.materialboxed').materialbox();

  $('.carousel').carousel();

  $(".button-collapse").sideNav({
    closeOnClick: true
  });

  $('.slider').slider({
    interval: 5000,
    height: 500
  });

  $('a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname) {
      var $target = $(this.hash);
      $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        $('html,body').animate({scrollTop: targetOffset}, 2000);
        return false;
      }
    }
  });

});
