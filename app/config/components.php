<?php

return [
    'assetManager' => [
        'basePath' => '@webroot/web/assets',
        'baseUrl' => '@web/web/assets',
    ],
    'db' => require(__DIR__ . '/db.php'),
    'cache' => [
        'class' => 'yii\caching\FileCache',
    ],
    'errorHandler' => [
        'errorAction' => 'site/error',
    ],
    'log' => [
        'traceLevel' => YII_DEBUG ? 3 : 0,
        'targets' => [
            [
                'class' => 'yii\log\FileTarget',
                'levels' => ['error', 'warning'],
            ],
        ],
    ],
    'mailer' => [
        'class' => 'yii\swiftmailer\Mailer',
        // send all mails to a file by default. You have to set
        // 'useFileTransport' to false and configure a transport
        // for the mailer to send real emails.
        'useFileTransport' => true,
    ],
    'request' => [
        // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
        'cookieValidationKey' => '970UhpKWaTjo1zEjz85B6Iean49825x4',
    ],
    'user' => [
        'identityClass' => 'app\models\User',
        'enableAutoLogin' => true,
    ],
    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
    ],
];
