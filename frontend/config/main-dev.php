<?php

$config = [
    'bootstrap' => ['debug'],

    'modules' => [

        'debug' =>
        [
            'allowedIPs' => ['*'],
            'class' => 'yii\debug\Module',
        ]
    ],

];

return $config;
