// rewrite design defaul grav
$('#case-study-form').children('div.buttons').addClass('col-sm-6 p-top');
$('#case-study-form').children('div.form-field').each(function() {
    var h = $(this).children('div.col-sm-10').children('input[name="data[email]"]').length > 0;
    if (h) {
        $(this).addClass("col-sm-12 p-top")
    } else {
        $(this).addClass("col-sm-6 p-top");
    }
    $(this).children('label.control-label').removeClass('col-sm-2');
    $(this).children('div.col-sm-10').removeClass('col-sm-10');

});

var competitor = $(".hid-competitor").val();
var exitingcustomer = $(".hid-exitingcustomer").val();
var blacklist = $(".hid-blacklist").val();
$(".hid-competitor").remove();
$(".hid-exitingcustomer").remove();
$(".hid-blacklist").remove();

function showSubmitIcon() {
    document.getElementById('sumit-form-preload').style.display = "block";
}

function HideSubmitIcon() {
    document.getElementById('sumit-form-preload').style.display = "none";
}

// function get coutry
function getLocation() {
    $.getJSON("http://api.ipstack.com/222.255.130.162?access_key=23936322903c05bc8e399a2c75213eae", function(data) {
        var country = data.country_name;
        $('input[name="data[country]"]').val(country);
    });
}

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
            'data[firstName]': {
                required: true,
                regx: /^[ 0-9a-zA-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\\s]+$/,
                maxlength: 100,
            },
            'data[lastName]': {
                required: true,
                regx: /^[ 0-9a-zA-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\\s]+$/,
                maxlength: 100,

            },
            'data[email]': {
                required: true,
                validate_email: true,
                maxlength: 100
            }
        }
    });
}



function check_Customer_Type(email) {
    var domain = email.substring(email.lastIndexOf('@') + 1);
    var result;
    if (competitor && competitor.indexOf(domain) != -1) {
        result = 'competitor';
        return result;
    }
    if (exitingcustomer && exitingcustomer.indexOf(domain) != -1) {
        result = 'existing';
        return result;
    }
    return result;
}

$(document).ready(function() {
    // $.validator.setDefaults({
    //     ignore: []
    // });


    $("input[name='data[ClientID]']").val((Math.random() * 100000000));
    $('input[name="data[url]"]').val(window.location.href);
    var file = $(".hid-file-path").val();
    $(".hid-file-path").remove();
    $('input[name="data[file_path]"]').val(file);

    getLocation();
    var contactForm = $('#case-study-form');
    var responseOutput = $('#myModal');
    validate(contactForm);
    contactForm.on('submit', function(event) {
        // PREVENT DEFAULT FORM SUBMISSION
        event.preventDefault();
        //prevent submit when captcha fail
        if ($('form').has("#g-recaptcha-response").length && $("#g-recaptcha-response").val() === '') {
            return false;
        }
        showSubmitIcon();
        var email = $("input[name='data[email]']").val();
        var formdata = contactForm.serialize().replace("data%5Btyped%5D=", "data%5Btyped%5D=" + check_Customer_Type(email));
        var lib = window.location.origin + "/lib/case-study/pardot.php";
        // SUBMIT THE FORM VIA AJAX
        $.ajax({
            url: contactForm.attr('action'),
            type: contactForm.attr('method'),
            data: formdata,
            dataType: 'html',
            // ON AJAX SUCCES
            success: function(message, status) {
                HideSubmitIcon();
                // IF JSON RETURN 'success' as statut
                if (message.indexOf('success') > -1) {
                    responseOutput.modal('toggle');
                    //contactForm.find("input, textarea").val("");
                    grecaptcha.reset();
                    contactForm.trigger("reset");
                }

                // IF JSON RETURN 'error' as statut
                if (status === 'error') {
                    console.log('this is an ERROR !!!')
                }
            }
        });
        if (check_Customer_Type(email) != "competitor") {
            $.ajax({
                url: lib,
                type: 'POST',
                data: contactForm.serialize(),
                dataType: 'html',
                // ON AJAX SUCCES
                success: function(message, status) {
                    // IF JSON RETURN 'error' as statut
                    if (status === 'error' || message.indexOf('error') > -1) {
                        console.log('this is an ERROR !!!')
                    }
                }
            });
        }
    })
})