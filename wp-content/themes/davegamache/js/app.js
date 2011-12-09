$(document).ready(function() {


  var $artHeaderInner = $('.art-header-inner');
  var $artHeader = $('.art-header');
  var $nav = $('.nav');
  var artHeaderInnerTop = parseInt($artHeaderInner.css('top'));
  var windowScroll;


  $(window).scroll(function() {

    //Get scroll position of window
    windowScroll = $(this).scrollTop();

    //Slow scroll of .art-header-inner scroll and fade it out
    $artHeaderInner.css({
      'top' : (artHeaderInnerTop-(windowScroll/3.5))+"px",
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
  });
});


//Call Masonry on Articles page
$(function(){
  $('.art-list ul').masonry({
    itemSelector : '.art-list-item',
    columnWidth : 340
  });
});