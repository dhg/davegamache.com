$(document).ready(function() {
  var scrollContainer = $('.art-header-scroll-container');
  var artHeader = $('.art-header');
  var nav = $('.nav');
  var scrollContainerTop = parseInt(scrollContainer.css('top'));
  $(window).scroll(function() {
    scrollFromTop = $(this).scrollTop();
    console.log(scrollFromTop)
    scrollContainer.css({
      'top' :                 (scrollContainerTop-(scrollFromTop/3))+"px",
      'opacity' :             1-(scrollFromTop/550)
    })
    artHeader.css({
      'background-position' : 'center ' + (-scrollFromTop/8)+"px"
    });
    nav.css({
      'opacity' :             1-(scrollFromTop/400)
    })
  })



  $('.castle').click(function() {
    $('body').toggleClass('shelf-open')
  })


})