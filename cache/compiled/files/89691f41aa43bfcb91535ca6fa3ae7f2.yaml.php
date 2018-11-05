<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/giahan/user/themes/x-corporation/blueprints/post.yaml',
    'modified' => 1540576999,
    'data' => [
        'title' => 'Bài Viết',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'title' => 'Nội Dung',
                            'fields' => [
                                'header.content.contact' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'Liên Hệ',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Bật',
                                        0 => 'Tắt'
                                    ]
                                ],
                                'header.content.recommended' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'Bài Viết Khác',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Bật',
                                        0 => 'Tắt'
                                    ]
                                ],
                                'header.thumbnail' => [
                                    'type' => 'filepicker',
                                    'preview_images' => true,
                                    'acccept' => [
                                        0 => '.png',
                                        1 => '.jpg',
                                        2 => '.gif'
                                    ],
                                    'label' => 'Ảnh Đại Diện'
                                ],
                                'header.description' => [
                                    'type' => 'textarea',
                                    'label' => 'Mô Tả'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
