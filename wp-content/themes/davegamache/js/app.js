// var $container;

// function triggerMasonry1() {
//   // don't proceed if $container has not selected
//   if ( !$container ) {
//     return
//   }
//   $container.masonry({
//     itemSelector : '.art-list-thoughts .art-list-item',
//     columnWidth : 245
//   });
// }

// function triggerMasonry2() {
//   // don't proceed if $container has not selected
//   if ( !$container ) {
//     return
//   }
//   $container.masonry({
//     itemSelector : '.art-list-articles .art-list-item',
//     columnWidth : 502
//   });
// }

// $(function(){
//   $container = $('.art-list .art-list-thoughts');
//   // trigger masonry on doc ready
//   triggerMasonry1();
// });

// $(function(){
//   $container = $('.art-list .art-list-articles');
//   // trigger masonry on doc ready
//   triggerMasonry2();
// });

function triggerMasonry1() {
  //do nothing
}

// trigger masonry when fonts have loaded
Typekit.load({
  active: triggerMasonry1,
  inactive: triggerMasonry1
});


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

  // Fire up Masonry for articles page
  // $('.art-list ul').masonry({
  //   itemSelector : '.art-list-item',
  //   columnWidth : 340
  // });

});