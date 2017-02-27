  jQuery(document).ready(function($) {
    $('.homepageslider').royalSlider({
        imageScaleMode: 'none',
        slidesSpacing: 0,
        arrowsNavAutoHide: false,
        fadeinLoadedSlide: false,
        controlNavigation: 'thumbnails',
        transitionType: 'fade',
        loop: 'true',
        autoPlay: {
            // autoplay options go here
            enabled: true,
            // autoScaleSlider: true,
            pauseOnHover: false,
            delay: 4500,
        }
    }); 

  });

jQuery(document).ready(function($) {
  $('ul.nav li.dropdown, ul.nav li.dropdown-submenu').hover(function() {
        $(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeIn();
    }, function() {
        $(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeOut();
    });
});