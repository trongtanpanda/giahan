---
title: 'Đặt Mua'
visible: false
twittercardoptions: summary
articleenabled: false
musiceventenabled: false
orgaenabled: false
orga:
    ratingValue: 2.5
orgaratingenabled: false
eventenabled: false
personenabled: false
restaurantenabled: false
restaurant:
    acceptsReservations: 'yes'
    priceRange: $
form:
    action: /san-pham/dat-mua
    name: product-form
    refresh_prevention: true
    fields:
        -
            name: url
            type: hidden
        -
            name: product_name
            type: hidden
        -
            name: name
            label: 'Tên của bạn'
            placeholder: 'Tên của bạn'
            type: text
            validate:
                required: true
            classes: form-control
        -
            name: phone
            label: 'Số Điện Thoại'
            placeholder: 'Số Điện Thoại'
            type: text
            validate:
                required: true
            classes: form-control
        -
            name: email
            label: Email
            placeholder: Email
            type: email
            classes: form-control
        -
            name: message
            label: 'Địa Chỉ Nhận Hàng'
            placeholder: 'Địa Chỉ Nhận Hàng'
            type: textarea
            rows: 2
            classes: form-control
    buttons:
        -
            type: submit
            value: 'Đặt Mua'
            classes: 'btn btn-primary'
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to:
                    - '{{ config.plugins.email.to }}'
                subject: 'Đặt Mua sản phẩm {{ form.value.product_name }}'
                body: '{% include ''forms/product_admin_mail.html.twig'' %}'
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to:
                    - '{{ form.value.email }}'
                subject: 'Đặt Mua sản phẩm {{ form.value.product_name }}'
                body: '{% include ''forms/product_client_mail.html.twig'' %}'
        -
            save:
                fileprefix: dat-mua-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: success
---

