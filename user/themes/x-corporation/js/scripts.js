jQuery(function($) {
    'use strict';
    // Instantiate the Bootstrap carousel
    $('.multi-item-carousel').carousel({
        interval: false
    });

    // for every slide in carousel, copy the next slide's item in the slide.
    // Do the same for the next, next item.
    $('.multi-item-carousel .item').each(function() {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        } else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });
    (function() {
        $('#status').fadeOut();
        $('#preloader').delay(200).fadeOut('slow');
    }());
    $(window).scroll(function() {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-fixed-top").addClass("sticky-nav");
        } else {
            $(".navbar-fixed-top").removeClass("sticky-nav");
        }
    });

    (function() {
        $('[data-toggle="tooltip"]').tooltip()
    }());
    (function() {
        $('body').append('<div id="toTop"><i class="fa fa-angle-up"></i></div>');
        $(window).scroll(function() {
            if ($(this).scrollTop() != 0) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
        });
        $('#toTop').on('click', function() {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });
    }());
    (function() {
        $('.testimonialSlider').flexslider({
            animation: "slide",
            controlNav: "thumbnails",
            directionNav: false
        })
        $('.prev').on('click', function() {
            $('.testimonialSlider').flexslider('prev')
            return false;
        })
        $('.next').on('click', function() {
            $('.testimonialSlider').flexslider('next')
            return false;
        })
    }());
});
$(document).on('click', '.m-menu .dropdown-menu', function(e) {
    e.stopPropagation()
})