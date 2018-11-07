<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/giahan/user/themes/x-corporation/blueprints/modular/event.yaml',
    'modified' => 1540660717,
    'data' => [
        'title' => 'Danh Sách Bài Viết',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'title' => 'Content',
                            'fields' => [
                                'header.content.items.@taxonomy.category' => [
                                    'type' => 'text',
                                    'label' => 'Thể loại',
                                    'default' => 'tintuc'
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
                                    'default' => 4
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
