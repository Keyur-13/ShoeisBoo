jQuery(window).on('load', function() {

    /**
    * Check if slick is initialized or not
    */

    if( !jQuery().slick ) {
        return;
    }

    jQuery('.eye_catching_blog_slider').slick({
        centerMode: true,
        centerPadding: '260px',
        infinite: true,
        slidesToShow: bizberg_object.slidesToShowDesktop,
        autoplaySpeed: bizberg_object.autoplaySpeed * 1000,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        autoplay: true,
        speed: bizberg_object.speed,
        loop:true,
        draggable: bizberg_object.draggable,
        responsive: [{
            breakpoint: 1025,
            settings: {
                slidesToShow: bizberg_object.slidesToShowTablet,
                centerPadding: '100px',
                arrows: true,
                dots: false
            }
        }, {
            breakpoint: 639,
            settings: {
                slidesToShow: bizberg_object.slidesToShowMobile,
                centerPadding: '0px',
                arrows: false,
                dots: true
            }
        }]
    });
});