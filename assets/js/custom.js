
jQuery(function ($) {
    console .log(wp_variable.path)
        // Carousel 1
        $('.logo-carousel').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 0,
                speed: 8000,
                arrows: false,
                dots: false,
                pauseOnHover: true,
                cssEase: 'linear',

                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 2
                    }
                }]
            });

// Carousel 2
 $('.testimonio-carousel').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                arrows: false,
                dots: false,
                pauseOnHover: true,
                cssEase: 'linear',
            });
 // carga de bg
    var cover1 = 'linear-gradient(   rgba(0,0,0,.5),    rgba(60,60,60,.5)),    url("' + wp_variable.path +  '/assets/img/bg/toasting-glasses.jpg")'

    var cover2 =  'linear-gradient( rgba(0,0,0,.5), rgba(60,60,60,.5)), url("' + wp_variable.path +  '/assets/img/bg/img-6.jpg") '
    
    var cover3 =  'linear-gradient(   rgba(0,0,0,.5),    rgba(60,60,60,.5)),    url("' + wp_variable.path +  '/assets/img/bg/service-corporate-1.jpg")'
    
    $(".bg-cover-1").css('background', String(cover1));
    $(".bg-cover-2").css( 'background', String(cover1));
    $(".bg-cover-3").css('background', String(cover1));
    

 
})      ; // jQuery End
