var countdown = 5;
var intervalV = 0;

jQuery(document).ready(function() {
    var file = window.location.origin + "/newv1/lib/downloadfile.php?us=" + jQuery("#email_dl").val() + "&rs=" + jQuery("#file_dl").val();
    jQuery("#countDown").text(getTextDisplay(countdown));
    intervalV = setInterval(function() { updateCountDown() }, 1000);

    function updateCountDown() {
        countdown = countdown - 1;
        var value = countdown;
        if (value == 0) {
            jQuery("#countDown").text(getTextDisplay(value));
            jQuery('body').append('<iframe width="0px" height="0px" src="' + file + '" style="display:none"></iframe>');
        } else if (value >= 1) {
            jQuery("#countDown").text(getTextDisplay(value));
        } else if (value < 0 && value > -3) {
            clearInterval(intervalV);
            jQuery("#countDown").text(getTextDisplay(value));
        }
    }

    function getTextDisplay(seconds) {
        if (seconds == 0) {
            return 'Downloading...';
        } else if (seconds >= 1) {
            if (seconds == 1) {
                return 'Your download will begin in ' + seconds + ' second';
            } else {
                return 'Your download will begin in ' + seconds + ' seconds';
            }

        } else if (seconds < 0 && seconds > -3) {
            return '';
        }
    }
});