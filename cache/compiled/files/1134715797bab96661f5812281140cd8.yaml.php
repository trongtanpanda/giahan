<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/giahan/user/themes/x-corporation/blueprints/list_post.yaml',
    'modified' => 1540579660,
    'data' => [
        'title' => 'Danh Sách Bài Viết',
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
                            'title' => 'Content',
                            'fields' => [
                                'header.content.items' => [
                                    'type' => 'text',
                                    'label' => 'Thể loại',
                                    'default' => '@self.children'
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
                                    'default' => 10
                                ],
                                'header.content.pagination' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'Liên Hệ',
                                    'highlight' => true,
                                    'options' => [
                                        1 => 'Bật',
                                        0 => 'Tắt'
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