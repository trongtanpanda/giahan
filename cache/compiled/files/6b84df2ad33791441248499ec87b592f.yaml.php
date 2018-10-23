<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/wamp64/www/giahan/user/themes/x-corporation/blueprints/product.yaml',
    'modified' => 1540295039,
    'data' => [
        'title' => 'Section',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'ads' => [
                            'type' => 'tab',
                            'title' => 'Nội dung',
                            'fields' => [
                                'header.url' => [
                                    'type' => 'text',
                                    'label' => 'Link'
                                ],
                                'header.url_text' => [
                                    'type' => 'text',
                                    'label' => 'Tên Nút bấm'
                                ],
                                'header.target' => [
                                    'type' => 'select',
                                    'label' => 'Kiểu Mở Link',
                                    'options' => [
                                        'none' => 'Tab hiện tại',
                                        '_blank' => 'Tab mới'
                                    ]
                                ],
                                'header.align' => [
                                    'type' => 'select',
                                    'label' => 'Canh chỉnh',
                                    'options' => [
                                        'left' => 'Canh Trái',
                                        'center' => 'Canh Giữa',
                                        'right' => 'Canh Phải'
                                    ]
                                ],
                                'header.background' => [
                                    'type' => 'filepicker',
                                    'preview_images' => true,
                                    'acccept' => [
                                        0 => '.png',
                                        1 => '.jpg',
                                        2 => '.gif'
                                    ],
                                    'label' => 'Ảnh Nền'
                                ],
                                'header.color' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Màu chữ'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
