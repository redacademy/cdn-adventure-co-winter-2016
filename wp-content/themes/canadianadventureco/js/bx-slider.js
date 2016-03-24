jQuery(document).ready(function(){

  jQuery('.bxslider').bxSlider({
    pagerCustom: '#bx-pager',
    slideMargin: 10,
  });

  jQuery('.menu-button').on('click', function() {
    jQuery('.main-navigation').toggle().addClass('mobile-menu');

    jQuery('#primary-menu').toggle();
    jQuery('.site-branding').toggle();

  });
});
