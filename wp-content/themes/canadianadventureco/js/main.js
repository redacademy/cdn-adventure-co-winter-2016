jQuery(document).ready(function($){

//lodge photo gallery

  $('.bxslider').bxSlider({
    pagerCustom: '#bx-pager',
    slideMargin: 10,
  });

//mobile menu function

  $('.menu-button').on('click', function(event) {
    event.preventDefault();
    $('.mobile-navigation').toggle();

    $('#secondary-menu').toggle();
    $('.site-branding').toggle();
    $('body').toggleClass('no-scroll');

  });

//Disable scroll on map until click
  $('.map-cont').click(function () {
      $('.map').css('pointer-events', 'auto');
  });

  $('.map-cont').mouseleave(function() {
    $('.map').css('pointer-events', 'none');
  });

// Scroll header css
$('.home').children().children('header').addClass('transparent');

  $(window).scroll(function() {
    if ($(this).scrollTop() > 755 && $('body').hasClass('home')){
      $('header').removeClass('transparent');
    }
    else if ($(this).scrollTop() > -1 && $('body').hasClass('home')) {
      $('header').addClass('transparent');
    }
  });

});
