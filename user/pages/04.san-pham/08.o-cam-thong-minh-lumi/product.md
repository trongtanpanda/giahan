---
title: ' Ổ Cắm Thông Minh Lumi'
media_order: 'LM-VN-OC1.jpg,8.jpg,4_1.jpg'
content:
    contact: '0'
    recommended: '0'
    items:
        '@taxonomy':
            category: sanpham
    order:
        by: date
        dir: desc
    limit: 6
price: 693.000₫
thumbnail: LM-VN-OC1.jpg
state: 'Còn Hàng'
gallery: '0'
taxonomy:
    category:
        - sanpham
visible: false
feature_content: "Ổ cắm điện mặt kính LM-SK là thiết bị điện do Công Ty CP Lumi Việt Nam sản xuất. Với bề mặt kính  cường lực cách điện,cách nhiệt,đây là thiết bị tuyệt đối an toàn với trẻ, chống mở, có nối đất.\r\n\r\nỔ cắm lumi là một thiết bị điện thông minh trong bộ giải pháp nhà thông minh Lumi, nó không chỉ có là thiết bị dùng để tiếp điện như những chiếc công tắc bình thường mà còn là món đồ trang trí cho ngôi nhà của bạn.\r\n\r\n![](/giahan/san-pham/o-cam-thong-minh-lumi/4_1.jpg)\r\n\r\nVới thiết kế đồng bộ với các công tắc cảm ứng, ổ cắm điện thông minh Lumi có vẻ ngoài SANG TRỌNG và ĐẸP MẮT. Bề mặt được trang bị mặt kính cường lực càng làm cho thiết bị này trở nên TINH TẾ hơn.\r\n\r\n![](/giahan/san-pham/o-cam-thong-minh-lumi/8.jpg) \r\n\r\nỔ cắm điện Lumi có hai màu cơ bản là màu đen và màu trắng phù hợp với mọi không gian sống và nội thất kiến trúc của mọi ngôi nhà từ hiện đại cho đến cổ điển.\r\n\r\nNgoài sử dụng cắm điện thì ổ điện Lumi còn sử dụng như một ổ cắm wifi, cắm dây cap truyền hình,…"
feature_items:
    -
        key: 'Chống mở'
        value: Có
    -
        key: 'Màu'
        value: Đen/Trắng
    -
        key: 'Sổ ổ'
        value: '2'
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
header_image_file: LM-VN-OC1.jpg
form:
    name: contact-form
    fields:
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
                subject: '[Contact] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: contact-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            display: /san-pham/dat-mua
---

