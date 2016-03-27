jQuery(document).ready(function(){

//lodge photo gallery

  jQuery('.bxslider').bxSlider({
    pagerCustom: '#bx-pager',
    slideMargin: 10,
  });

//mobile menu function

  jQuery('.menu-button').on('click', function() {
    jQuery('.mobile-navigation').toggle().toggleClass('mobile-menu');

    jQuery('#secondary-menu').children('ul').toggle();
    jQuery('.site-branding').toggle();

  });

  jQuery('.map-cont').click(function () {
      jQuery('.map').css('pointer-events', 'auto');
  });

  jQuery( '.map-cont' ).mouseleave(function() {
    jQuery('.map').css('pointer-events', 'none');
  });

});
