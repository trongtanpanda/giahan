$(document).ready(function(){
    $('a[rel="lightbox"]').{pluginName}({
        openSpeed: {openSpeed},
        closeSpeed: {closeSpeed},
        closeOnClick: '{closeOnClick}',
        closeOnEsc: '{closeOnEsc}',
        root: '{root}',
        afterContent: function() {
            var caption = this.$currentTarget.find('img').attr('alt');
            this.$instance.find('.caption').remove();
            $('<div class="caption">').text(caption).appendTo(this.$instance.find('.featherlight-content'));
        }
    });
});