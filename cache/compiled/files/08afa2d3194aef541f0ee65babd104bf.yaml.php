<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/wamp64/www/giahan/user/themes/x-corporation/blueprints/modular/features.yaml',
    'modified' => 1541503598,
    'data' => [
        'title' => 'Features',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'features' => [
                            'type' => 'tab',
                            'title' => 'THEME_X_CORPORATION.ADMIN.FEATURES.LABEL',
                            'fields' => [
                                'header.layout' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'Vị Trí Ảnh',
                                    'options' => [
                                        'left' => 'Trái',
                                        'right' => 'Phải'
                                    ]
                                ],
                                'header.features' => [
                                    'name' => 'features',
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'label' => 'THEME_X_CORPORATION.ADMIN.FEATURES.LABEL',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'THEME_X_CORPORATION.ADMIN.FEATURES.TITLE.LABEL',
                                            'help' => 'THEME_X_CORPORATION.ADMIN.FEATURES.TITLE.HELP'
                                        ],
                                        '.icon' => [
                                            'type' => 'text',
                                            'label' => 'THEME_X_CORPORATION.ADMIN.FEATURES.ICON.LABEL',
                                            'help' => 'THEME_X_CORPORATION.ADMIN.FEATURES.ICON.HELP'
                                        ],
                                        '.description' => [
                                            'type' => 'textarea',
                                            'rows' => 5,
                                            'label' => 'THEME_X_CORPORATION.ADMIN.FEATURES.DESCRIPTION.LABEL',
                                            'help' => 'THEME_X_CORPORATION.ADMIN.FEATURES.DESCRIPTION.HELP'
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
