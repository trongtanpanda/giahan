<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/giahan/user/themes/x-corporation/blueprints/product.yaml',
    'modified' => 1540707630,
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
                                'modular_title' => [
                                    'type' => 'spacer',
                                    'title' => 'PLUGIN_ADMIN.MODULAR_SETUP'
                                ],
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
                                'header.price' => [
                                    'type' => 'text',
                                    'label' => 'Giá'
                                ],
                                'header.thumbnail' => [
                                    'type' => 'filepicker',
                                    'folder' => 'self@',
                                    'label' => 'Ảnh Đại Diện',
                                    'preview_images' => true,
                                    'toggleable' => true,
                                    'accept' => [
                                        0 => '.png',
                                        1 => '.jpg'
                                    ]
                                ],
                                'header.state' => [
                                    'type' => 'select',
                                    'label' => 'Trạng Thái',
                                    'default' => 1,
                                    'highlight' => 1,
                                    'options' => [
                                        'Còn Hàng' => 'Còn Hàng',
                                        'Sắp về' => 'Sắp về',
                                        'Hết Hàng' => 'Hết Hàng'
                                    ]
                                ],
                                'header.gallery' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'Hình Ảnh Sản Phẩm',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Bật',
                                        0 => 'Tắt'
                                    ]
                                ],
                                'header.content.items.@taxonomy.category' => [
                                    'type' => 'text',
                                    'label' => 'Thể loại',
                                    'default' => 'sanpham'
                                ],
                                'header.content.order.by' => [
                                    'type' => 'text',
                                    'label' => 'Xếp theo',
                                    'default' => 'date'
                                ],
                                'header.content.order.dir' => [
                                    'type' => 'text',
                                    'label' => 'Xếp theo',
                                    'default' => 'desc'
                                ],
                                'header.content.limit' => [
                                    'type' => 'number',
                                    'label' => 'Giới hạn',
                                    'default' => 6
                                ]
                            ]
                        ],
                        'feature' => [
                            'type' => 'tab',
                            'title' => 'Đặc Điểm nổi Bật',
                            'fields' => [
                                'header.feature_content' => [
                                    'type' => 'editor',
                                    'label' => 'Nội Dung'
                                ]
                            ]
                        ],
                        'technical' => [
                            'type' => 'tab',
                            'title' => 'Thông Số Kỹ Thuật',
                            'fields' => [
                                'header.feature_items' => [
                                    'name' => 'feature_items',
                                    'type' => 'list',
                                    'label' => 'Thông số',
                                    'fields' => [
                                        '.key' => [
                                            'type' => 'text',
                                            'label' => 'Tên Thông Số'
                                        ],
                                        '.value' => [
                                            'type' => 'text',
                                            'label' => 'Giá Trị'
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
