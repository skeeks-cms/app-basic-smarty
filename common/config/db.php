<?php
/**
 * @author Semenov Alexander <support@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 17.09.2015
 */
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=app-basic_smarty',
            'username' => 'app-basic',
            'password' => 'hDZwcmEYc64vBtEB',
            'charset' => 'utf8',
            'enableSchemaCache' => true,
            'schemaCacheDuration' => 3600,
        ]
    ]
];
