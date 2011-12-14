$(document).ready(function() {



  var $artHeaderInner = $('.art-header-inner');
  var $artHeader = $('.art-header');
  var $artTitle = $('.art-title');
  var $artSubtitle = $('.art-subtitle');
  var $artTime = $('.art-time');
  var artTitleFontSize = parseInt($artTitle.css('font-size'));
  var $nav = $('.nav');
  var windowScroll;


  $artTitle.fitText(1, { minFontSize: '40px' });

  $(window).scroll(function() {
    slidingTitle();
  });

  function slidingTitle() {
    //Get scroll position of window
    windowScroll = $(this).scrollTop();

    //Slow scroll of .art-header-inner scroll and fade it out
    $artHeaderInner.css({
      'margin-top' : -(windowScroll/3)+"px",
      'opacity' : 1-(windowScroll/550)
    });

    //Slowly parallax the background of .art-header
    $artHeader.css({
      'background-position' : 'center ' + (-windowScroll/8)+"px"
    });

    //Fade the .nav out
    $nav.css({
      'opacity' : 1-(windowScroll/400)
    });
  }


});