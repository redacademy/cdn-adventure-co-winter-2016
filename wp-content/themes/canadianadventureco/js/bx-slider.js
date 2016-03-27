jQuery(document).ready(function(){

//lodge photo gallery

  jQuery('.bxslider').bxSlider({
    pagerCustom: '#bx-pager',
    slideMargin: 10,
  });

//mobile menu function

  jQuery('.menu-button').on('click', function() {
    jQuery('.mobile-navigation').toggle().toggleClass('mobile-menu');

    jQuery('.mobile-navigation').children().children('ul').toggle();
    jQuery('.site-branding').toggle();

  });
});
