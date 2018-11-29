jQuery(function($) {
    'use strict';
    $(document).ready(function() {
        $('input[name="data[url]"]').val(window.location);
        $('input[name="data[product_name]"]').val($('.product-main-info h2').html());
    });
    var productForm = $('#product-form');
    var responseOutput = $('#successModal');
    validate(productForm);
    productForm.on('submit', function(event) {
        event.preventDefault();
        showSubmitIcon();
        var email = $("input[name='data[email]']").val();
        var formdata = productForm.serialize();
        // SUBMIT THE FORM VIA AJAX
        $.ajax({
            url: productForm.attr('action'),
            type: productForm.attr('method'),
            data: formdata,
            dataType: 'html',
            // ON AJAX SUCCES
            success: function(message, status) {
                HideSubmitIcon();
                // IF JSON RETURN 'success' as statut
                if (message.indexOf('success') > -1) {
                    $('#myModal').modal('hide');
                    responseOutput.modal('toggle');
                    //productForm.find("input, textarea").val("");
                    productForm.trigger("reset");
                }

                // IF JSON RETURN 'error' as statut
                if (status === 'error') {
                    console.log('this is an ERROR !!!')
                }
            }
        });
    })
});

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