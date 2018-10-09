$( function() {

    var datat =localStorage.getItem("wordlist");
    if (datat === null) {
        $.ajax( {
            url: window.location.origin + "/careers/s/s",
            data: {
                q: 'def'
            },
            success: function( data ) {
                localStorage.setItem("wordlist",data);
                datat = data;
            }
        } );
    }
    if (datat === null) {
        datat = [];
    }
    $( "#site-search-input" ).autocomplete({
        source: datat.split(","),
        minLength: 3,
    });
} );