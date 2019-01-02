---
title: 'Contact Form'
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
    action: /lien-he/contact-form
    name: contact-form
    fields:
        - name: name
          label: Name
          placeholder: 'Họ Và Tên'
          type: text
          validate:
            required: true
        - name: email
          label: Email
          placeholder: 'Email'
          type: email
          validate:
            required: true
        - name: phone
          label: Phone
          placeholder: 'Điện Thoại'
          type: text
          validate:
            required: true
        - name: message
          label: Message
          placeholder: 'Nội Dung'
          type: textarea
          rows: 6
          validate:
            required: true
          classes: form-control
    buttons:
        - type: submit
          value: 'Gửi'
          classes: 'btn btn-primary'
    process:
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
              - "{{ config.plugins.email.to }}"
              - dungthau89@gmail.com
            subject: "Liên Hệ"
            body: '{% include ''forms/contact_admin_mail.html.twig'' %}'
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
              - '{{ form.value.email }}'
            subject: "Liên Hệ"
            body: '{% include ''forms/contact_client_mail.html.twig'' %}'
        - save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - message: success
---

