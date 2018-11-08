<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/wamp64/www/giahan/user/config/plugins/email.yaml',
    'modified' => 1541503595,
    'data' => [
        'enabled' => true,
        'from' => 'noreply@giahangroup.vn',
        'from_name' => 'GiaHanGroup',
        'to' => 'thienloc200122@gmail.com',
        'to_name' => 'Thien Loc',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.gmail.com',
                'port' => 465,
                'encryption' => 'ssl',
                'user' => 'mythien20112@gmail.com',
                'password' => '01225573345huong'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
