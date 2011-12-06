$(function(){
  $("img").each(function(){
    $(this).load(function(){
      $(this).fadeIn(500);
    }).attr("src", $(this).data("src"));
  });
});