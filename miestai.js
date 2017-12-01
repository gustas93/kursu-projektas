$(document).ready(function() {
  $('div img').animate({
    opacity:1
  });
  $('div img').hover(function(){
    $(this).stop().animate({opacity:0.5}, 'fast');
  }, function(){
    $(this).stop().animate({opacity:1}, 400);
  });
});
