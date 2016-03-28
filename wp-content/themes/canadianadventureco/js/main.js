jQuery(document).ready(function(){

//lodge photo gallery

  jQuery('.bxslider').bxSlider({
    pagerCustom: '#bx-pager',
    slideMargin: 10,
  });

//mobile menu function

  jQuery('.menu-button').on('click', function() {
    jQuery('.mobile-navigation').toggleClass('mobile-menu').toggle();

    jQuery('#secondary-menu').toggle();
    jQuery('.site-branding').toggle();

  });

//Disable scroll on map until click

  jQuery('.map-cont').click(function () {
      jQuery('.map').css('pointer-events', 'auto');
  });

  jQuery('.map-cont').mouseleave(function() {
    jQuery('.map').css('pointer-events', 'none');
  });

});
