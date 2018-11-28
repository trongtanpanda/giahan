// rewrite design defaul grav
function showSubmitIcon() {
    document.getElementById('sumit-form-preload').style.display = "block";
}

function HideSubmitIcon() {
    document.getElementById('sumit-form-preload').style.display = "none";
}

// function get coutry
jQuery.validator.addMethod("regx", function(value, element, regexpr) {
    return regexpr.test(value);
}, "Please remove special characters.");
jQuery.validator.addMethod('nofreeemail', function(value) {
    var whitelist = "";
    if (blacklist.indexOf(value.split('@').pop().toLowerCase()) >= 0 && whitelist.indexOf(value.trim()) == -1) {
        return false;
    } else {
        return true;
    }
}, 'Your email address is not allowed for registration. Please enter a valid email address from a corporate (i.e. non-free) domain.');

jQuery.validator.addMethod("validate_email", function(value, element) {

    if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
        return true;
    } else {
        return false;
    }
}, "Please enter a valid email address.");


//validation
function validate(e) {
    $(e).validate({
        rules: {
            // 'data[firstName]': {
            //     required: true,
            //     regx: /^[ 0-9a-zA-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\\s]+$/,
            //     maxlength: 100,
            // },
            // 'data[lastName]': {
            //     required: true,
            //     regx: /^[ 0-9a-zA-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\\s]+$/,
            //     maxlength: 100,

            // },
            'data[email]': {
                required: true,
                validate_email: true,
                maxlength: 100
            }
        }
    });
}

$(document).ready(function() {
    // $.validator.setDefaults({
    //     ignore: []
    // });
    $('input[name="data[url]"]').val(window.location.href);

    var contactForm = $('#document-form');
    var responseOutput = $('#myModal');
    validate(contactForm);
    contactForm.on('submit', function(event) {
        // PREVENT DEFAULT FORM SUBMISSION
        event.preventDefault();
        //prevent submit when captcha fail
        // if ($('form').has("#g-recaptcha-response").length && $("#g-recaptcha-response").val() === '') {
        //     return false;
        // }
        showSubmitIcon();
        var email = $("input[name='data[email]']").val();
        var formdata = contactForm.serialize();
        // SUBMIT THE FORM VIA AJAX
        $.ajax({
            url: contactForm.attr('action'),
            type: contactForm.attr('method'),
            data: formdata,
            dataType: 'html',
            // ON AJAX SUCCES
            success: function(message, status) {
                HideSubmitIcon();
                console.log(message);
                // IF JSON RETURN 'success' as statut
                if (message.indexOf('success') > -1) {
                    responseOutput.modal('toggle');
                    //contactForm.find("input, textarea").val("");
                    contactForm.trigger("reset");
                }

                // IF JSON RETURN 'error' as statut
                if (status === 'error') {
                    console.log('this is an ERROR !!!')
                }
            }
        });
    })
})