<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/giahan/user/plugins/tinymce-editor/blueprints/admin/pages/raw.yaml',
    'modified' => 1539598555,
    'data' => [
        'title' => 'PLUGIN_ADMIN.DEFAULT',
        '@extends' => [
            'type' => 'raw',
            'context' => 'blueprints://admin/pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'content' => [
                                    'type' => 'tinymce',
                                    'validate' => [
                                        'type' => 'textarea'
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
