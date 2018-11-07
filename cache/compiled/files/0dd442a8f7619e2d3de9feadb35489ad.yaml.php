<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/wamp64/www/giahan/user/themes/x-corporation/blueprints/modular/info.yaml',
    'modified' => 1541590820,
    'data' => [
        'title' => 'Information',
        '@extends' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'infos' => [
                            'type' => 'tab',
                            'title' => 'information',
                            'fields' => [
                                'header.infos' => [
                                    'name' => 'Info',
                                    'type' => 'list',
                                    'label' => 'Information',
                                    'fields' => [
                                        '.text' => [
                                            'type' => 'text',
                                            'label' => 'Tiêu Đề'
                                        ],
                                        '.content' => [
                                            'type' => 'editor',
                                            'label' => 'Nội Dung'
                                        ],
                                        '.content_color' => [
                                            'type' => 'colorpicker',
                                            'label' => 'Màu chữ'
                                        ],
                                        '.color' => [
                                            'type' => 'colorpicker',
                                            'label' => 'Màu nền'
                                        ],
                                        '.thumbnail' => [
                                            'type' => 'filepicker',
                                            'folder' => 'self@',
                                            'label' => 'Ảnh nền',
                                            'preview_images' => true,
                                            'accept' => [
                                                0 => '.png',
                                                1 => '.jpg'
                                            ]
                                        ],
                                        '.postion_image' => [
                                            'type' => 'select',
                                            'label' => 'Vị Trí Hình',
                                            'default' => 'left',
                                            'options' => [
                                                'left' => 'Trái',
                                                'center' => 'Giữa',
                                                'right' => 'Phải'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
