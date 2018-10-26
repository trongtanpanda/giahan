<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/wamp64/www/giahan/user/themes/x-corporation/blueprints/modular/why.yaml',
    'modified' => 1540552838,
    'data' => [
        'title' => 'Lý do chọn',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'why' => [
                            'type' => 'tab',
                            'title' => 'Lý do Chọn',
                            'fields' => [
                                'header.whys' => [
                                    'name' => 'whys',
                                    'type' => 'list',
                                    'style' => 'Lý do',
                                    'label' => 'THEME_X_CORPORATION.ADMIN.SOLUTIONS.LABEL',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'THEME_X_CORPORATION.ADMIN.SOLUTIONS.TITLE.LABEL',
                                            'help' => 'THEME_X_CORPORATION.ADMIN.SOLUTIONS.TITLE.HELP'
                                        ],
                                        '.description' => [
                                            'type' => 'textarea',
                                            'rows' => 5,
                                            'label' => 'THEME_X_CORPORATION.ADMIN.SOLUTIONS.DESCRIPTION.LABEL',
                                            'help' => 'THEME_X_CORPORATION.ADMIN.SOLUTIONS.DESCRIPTION.HELP'
                                        ],
                                        '.icon' => [
                                            'type' => 'text',
                                            'label' => 'THEME_X_CORPORATION.ADMIN.SOLUTIONS.ICON.LABEL',
                                            'help' => 'THEME_X_CORPORATION.ADMIN.SOLUTIONS.ICON.HELP'
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
