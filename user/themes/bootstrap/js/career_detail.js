$('#career-form').children('div.buttons').addClass('col-sm-6 p-top');
$('#career-form').children('div.form-field').each(function() {
    var h = $(this).children('div.col-sm-10').children('textarea').length > 0;
    if (h) {
        $(this).addClass("col-sm-12 p-top")
    } else {
        $(this).addClass("col-sm-6 p-top");
    }
    $(this).children('label.control-label').removeClass('col-sm-2');
    $(this).children('div.col-sm-10').removeClass('col-sm-10');

});

//var htmlInput = '<div class="form-field col-sm-12 p-top input-file"><label class="control-label resume">Resume *</label><div class="big"><div class="f-button"><span>Choose file</span><img src="/user/themes/bootstrap/assets/choose-file.png"></div><span id="file-name-submit" class="file-name">No file chosen</span></div></div>';
//$(htmlInput).insertAfter(".grav-input-file");
//$(".grav-input-file").css("display", "none");
$(".grav-input-file").removeClass("col-sm-6");
$(".grav-input-file").addClass("col-sm-12");

$('.f-button').click(function() {
    $(".dz-clickable").click();
});

$(".input-file-default").attr("name", "button-input-unuse");

$.validator.addMethod("regx", function(value, element, regexpr) {
    return regexpr.test(value);
}, "Please remove special characters.");

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
                maxlength: 100,
            },
            'data[phone]': {
                required: true,
                regx: /[0-9^etiosxnETIOSXN]+$/,
                maxlength: 30,
            },
            'data[comments]': {
                maxlength: 500,
            },
            'button-input-unuse': {
                required: true,
            }
        },
        messages: {
            'data[phone]': {
                regx: "Please enter a valid phone number.",
            },
        }
    });

}

function showSubmitIcon() {
    document.getElementById('sumit-form-preload').style.display = "block";
}

function HideSubmitIcon() {
    document.getElementById('sumit-form-preload').style.display = "none";
}

function FileUploadValidate() {
    var errorText = "<label id='data-file--error' class='error'>This field is required.</label>";
    var errorFileAccpet = "<label id='data-file--error' class='error'>Invalid file format. It should be .xlsx, .xls, .pdf, .doc, .docx, .csv.</label>";
    var errorFileSize = "<label id='data-file--error' class='error'>The file size exceeds the limit allowed 2MB</label>";
    if (!$("div.dz-preview").is(".dz-success")) {
        if ($("div.dz-preview").is(".dz-error")) {
            var contentError = $(".dz-error-message").children().text();
            if (contentError.indexOf("File is too big") > -1) {
                $("#data-file--error").remove();
                $(".grav-input-file").append(errorFileSize);
            } else {
                $("#data-file--error").remove();
                $(".grav-input-file").append(errorFileAccpet);
            }

        } else {
            $("#data-file--error").remove();
            $(".grav-input-file").append(errorText);
        }
        return false;
    } else {
        $("#data-file--error").remove();
        return true;
    }
    $("#sumit-form-preload").css("display", "none");
}

var getThis = null;

$(document).ready(function() {

    var this_emlement = $("div.form-input-wrapper.dropzone.files-upload.form-input-file.dz-clickable");

    $('input[name="data[position]"]').val($('h1.header-main-text p').text());
    $('input[name="data[url]"]').val(window.location.href);
    $('input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        $(".file-name").text(fileName);
    });
    $(".dz-default.dz-message").children().text("Choose file");
    $(".dz-default.dz-message").children().append("<img id='img-inside-choose-file' src='http://www.mowede.com/user/themes/bootstrap/assets/choose-file.png'>");


    var form = $('#career-form');
    var responseOutput = $('#myModal');
    validate(form);
    if ($('form').has("#g-recaptcha-response").length && $("#g-recaptcha-response").val() === '') {
        return false;
    }

    form.submit(function(e) {
        // prevent form submission
        e.preventDefault();

        if (!FileUploadValidate()) {
            return false;
        };

        showSubmitIcon();
        // submit the form via Ajax
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            dataType: 'html',
            data: form.serialize(),
            success: function(result) {
                HideSubmitIcon();
                if (result.indexOf('success') > -1) {
                    responseOutput.modal('toggle');
                    form.trigger("reset");
                    if (getThis != null) {
                        getThis.removeAllFiles();
                    }
                    grecaptcha.reset();
                    $("#data-file--error").remove();
                }
            },
            error: function(result) {
                console.log(result);
            }
        });
    });
});