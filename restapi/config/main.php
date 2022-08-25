<?php

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-restapi',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'restapi\controllers',
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            'baseUrl' => '/api',
            'csrfParam' => '_csrf-restapi',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],
        'response'=>[
           'format'=>yii\web\Response::FORMAT_JSON,
            'charset' => 'UTF-8',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => false,
            'loginUrl' => null,
            'identityCookie' => ['name' => '_identity-restapi', 'httpOnly' => true],
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

        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
// Image
               'image-index'  => 'image/index',
               'image-view'  => 'image/view',
               'image-create' => 'image/create',
               'image-update' => 'image/update',
               'image-delete' => 'image/delete',
// Order
               'order-index' => 'order/index',
               'order-view' => 'order/view',
               'order-create' => 'order/create',
               'order-update' => 'order/update',
               'order-delete' => 'order/delete',

// Contact
                'contact-index'  => 'contact/index',
                'contact-create'  => 'contact/create',
                'contact-view'  => 'contact/view',
                'contact-update'  => 'contact/update',
                'contact-delete'  => 'contact/delete',

// Config
                'config-index'   => 'config/index',
                'config-update'  => 'config/update',
//  Category
                'category-index'   => 'category/index',
                'category-create'  => 'category/create',
                'category-update'  => 'category/update',
                'category-view'    => 'category/view',
                'category-delete'  => 'category/delete',
//  Production
                'production-index'   => 'production/index',
                'production-create'  => 'production/create',
                'production-update'  => 'production/update',
                'production-view'    => 'production/view',
                'production-delete'  => 'production/delete',

                ['class' => 'yii\rest\UrlRule',
                    'pluralize' => false,
                    'controller' => [
                        'user',
                        'production',
                        'contact',
                        'config',
                        'category',
                        'order',
                    ]

                ],
            ],
        ]

    ],
    'params' => $params,
];
