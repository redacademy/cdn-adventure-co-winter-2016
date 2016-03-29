jQuery(document).ready(function($){

//lodge photo gallery

  $('.bxslider').bxSlider({
    pagerCustom: '#bx-pager',
    slideMargin: 10,
  });

//mobile menu function

  $('.menu-button').on('click', function() {
    $('.mobile-navigation').toggleClass('mobile-menu').toggle();

    $('#secondary-menu').toggle();
    $('.site-branding').toggle();
    $('.site-content').toggle();

  });

//Disable scroll on map until click

  $('.map-cont').click(function () {
      $('.map').css('pointer-events', 'auto');
  });

  $('.map-cont').mouseleave(function() {
    $('.map').css('pointer-events', 'none');
  });

  $('.map-cont').mouseenter(function() {
    $('.map').css('pointer-events', 'none');
  });

});
