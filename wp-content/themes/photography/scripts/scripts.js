$(document).ready(function(){
  /* menu toggle */
  $('.menu-item').click(function(){
    $(this).toggleClass('menu-item-dropdown');
    $(this).toggleClass('menu-item-click');
  });
  $('.menu-toggle').click(function(){
    $('.mobile-menu-dropdown').toggleClass('expand');
  });
  $('.inner-dropdown').click(function(){
    $(this).toggleClass('sub-expand');
  });
});

/* slick slider */
$(document).ready(function(){
  $('.testimonials-box .single-item').slick({
    autoplay: true,
    dots: true,
    infinite: true,
    speed: 500
  });
});
$(document).ready(function(){
  $('.jumbotron-section .single-item-slide').slick({
    autoplay: true,
    dots: true,
    infinite: true,
    speed: 500,
  });
});
