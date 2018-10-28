---
title: Compellingly implement distinctive outsourcing<br>and 24/365 customer service energistically.

form:
    action: /contact
    name: contact-form
    fields:
        - name: name
          label: Name
          placeholder: 'Họ Và Tên'
          type: text
          validate:
            required: true
          classes: form-control
        - name: email
          label: Email
          placeholder: 'Email'
          type: email
          validate:
            required: true
          classes: form-control
        - name: phone
          label: Phone
          placeholder: 'Điện Thoại'
          type: text
          validate:
            required: true
          classes: form-control
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
            subject: "[Contact] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        - save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - display: thank-you
---
