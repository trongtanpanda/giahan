---
title: form
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
    action: /tai-lieu-huong-dan/form
    name: document-form
    fields:
        -
            name: file_name
            type: hidden
        -
            name: file_path
            type: hidden
        -
            name: url
            type: hidden
        -
            name: name
            label: Name
            placeholder: 'Họ Và Tên'
            type: text
            validate:
                required: true
            classes: form-control
        -
            name: email
            label: Email
            placeholder: Email
            type: email
            validate:
                required: true
            classes: form-control
        -
            name: phone
            label: Phone
            placeholder: 'Điện Thoại'
            type: text
            validate:
                required: true
            classes: form-control
        -
            name: message
            label: Message
            placeholder: 'Nội Dung'
            type: textarea
            rows: 6
            validate:
                required: true
            classes: form-control
    buttons:
        -
            type: submit
            value: Gửi
            lasses: 'btn btn-primary'
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to:
                    - '{{ config.plugins.email.to }}'
                    - dungthau89@gmail.com
                subject: 'Tài Liệu Hướng Dẫn'
                body: '{% include ''forms/document_admin_mail.html.twig'' %}'
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to:
                    - '{{ form.value.email }}'
                subject: 'Tài Liệu Hướng Dẫn'
                body: '{% include ''forms/document_client_mail.html.twig'' %}'
        -
            save:
                fileprefix: document-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: success
---

