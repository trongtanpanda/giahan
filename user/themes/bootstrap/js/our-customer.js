$(document).ready(function(){
    $('.customer_branch').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        variableWidth:false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.customer_branch img').css('width','auto');
    $('.slick-prev').css("background-image", "url('user/themes/bootstrap/assets/arrow-point-to-left.png')");
    $('.slick-prev').css('content', 'none')
    $('.slick-next').css("background-image", "url('user/themes/bootstrap/assets/arrow-point-to-right.png')");
    $('.slick-next').css('content', 'none')
});
