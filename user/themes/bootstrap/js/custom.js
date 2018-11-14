'use strict';
jQuery(function($) {
    $('body').append('<div id="toTop"><i class="fa fa-angle-up"></i></div>');
    $(window).scroll(function() {
        if ($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });

    $('#toTop').on('click', function() {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    var stickyFooter = function() {
        var pageHeight = $('html').height();
        var windowHeight = $(window).height();
        var footerHeight = $('footer').outerHeight();

        var totalHeight = $('footer').hasClass('fixed-bottom') ?
            pageHeight + footerHeight : pageHeight;
        if (windowHeight >= totalHeight) {
            return $('footer').addClass('fixed-bottom');
        } else {
            return $('footer').removeClass('fixed-bottom');
        }
    };
    $(window).resize(function() {
        stickyFooter();
    });
    // -------------------------------------------------------------
    // Preloader
    // -------------------------------------------------------------
    (function() {
        $('#status').fadeOut();
        $('#preloader').delay(200).fadeOut('slow');
    }());

    function deleteClass(array) {
        $.each(array, function(key, value) {
            $(value).removeClass('open');
        });
    }
    (function ($) {
    $(document).ready(function () {
        $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function (event) {
            event.preventDefault();
            event.stopPropagation();
            $(this).parent().siblings().removeClass('open');
            $(this).parent().toggleClass('open');
        });
    });
})(jQuery);

    $(document).ready(function() {
        stickyFooter();
        var navHeight = $('nav').height();
        $('body').css('margin-top', navHeight);
        $(window).resize(function() {
            navHeight = $('nav').height();
            $('body').css('margin-top', navHeight);
        });

        

    });
    $('#site_search').on('click', function() {
        $('.search_view').show('slow');
    });
    $('.site_search_mobile').on('click', function() {
        $('.search_view').show('slow');
    });
    $('.search_close_icon').on('click', function() {
        $('.search_view').hide('slow');
    });
});