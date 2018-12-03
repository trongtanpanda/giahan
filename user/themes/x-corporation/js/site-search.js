$( function() {
    jQuery(document).ready(function($){
        var input = $('[data-search-input]');

        input.on('keypress', function(event) {
            if (event.which == 13 && input.val().length >= 3) {
                console.log('ádasd');
                event.preventDefault();
                window.location.href = input.data('search-input') + ';' + input.val();
            }
        });

        $('.search-submit').on('click', function(event) {
            event.preventDefault();
            window.location.href = input.data('search-input') + ';' + input.val();
        });
    });
});