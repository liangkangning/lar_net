<?php

$params = array_merge(

    require(__DIR__ . '/../../common/config/params.php'),

    require(__DIR__ . '/../../common/config/params-local.php'),

    require(__DIR__ . '/params.php'),

    require(__DIR__ . '/params-local.php')

);



return [

    'id' => 'app-home',

    'basePath' => dirname(__DIR__),

    'bootstrap' => ['log'],

    /* 默认路由 */

    'defaultRoute' => 'index',

    /* 控制器默认命名空间 */

    'controllerNamespace' => 'frontend\controllers',

    /* 模块 */

    'modules' => [

        'user' => [

            'class' => 'frontend\modules\user\Module',

        ],

    ],

    'components' => [
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [
                //这里如果你是qq的邮箱，可以参考qq客户端设置后再进行配置 http://service.mail.qq.com/cgi-bin/help?subtype=1&&id=28&&no=1001256
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.exmail.qq.com',
                'username' => 'liangkangning@juda.cn',
                'password' => 'aVZJdwKDAmwpWB23',
                'port' => '465',
                'encryption' => 'ssl',
            ],
            'messageConfig'=>[
                'charset'=>'UTF-8',
                'from'=>['liangkangning@juda.cn'=>'钜大数字运营中心']
            ],
        ],

        'user' => [

            'identityClass' => 'frontend\models\User',

            'enableAutoLogin' => true,

        ],

        /* 修改默认的request组件 */

        'request' => [

            'class' => 'common\core\Request',

            'baseUrl' => Yii::getAlias('@frontendUrl'),

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

            'enablePrettyUrl' => env('FRONTEND_PRETTY_URL', true),
            'showScriptName' => false,
            'suffix' => '.html',
            'rules' => [


                ['pattern'=>'<controller:(news|product|case)>/<id:\w+>','route'=>'<controller>/detail','suffix'=>'.html'],
                ['pattern'=>'<controller:(page)>/<action:\.+>','route'=>'<controller>/<action>','suffix'=>'.html'],

                ['pattern'=>'<controller:(industrial-battery|lithium-battery18650|lithium-ion-battery|lifepo4-battery|lithium-battery-cell|lithium-polymer-battery|energy-storage-battery|lithium-power-battery|special-battery|low-temperature-battery|wide-temperature-battery|lithium-titanate-battery|explosion-proof-battery|case|military|robotic|medical|instrument|survey|handheld|news|company-news|industry-news|battery-knowledge|rd|lithium-battery-research-institute|test-center|scientific-laboratory|product-certification|about-us|company-profile|qualifications-honors|history|contactus|form|site|search|special)>','route'=>'<controller>','suffix'=>'/'],

                ['pattern'=>'<controller:(industrial-battery|lithium-battery18650|lithium-ion-battery|lifepo4-battery|lithium-battery-cell|lithium-polymer-battery|energy-storage-battery|lithium-power-battery|special-battery|low-temperature-battery|wide-temperature-battery|lithium-titanate-battery|explosion-proof-battery)>/list-<list:.+>-p<page:\d+>','route'=>'<controller>/index','suffix'=>'.html'],

                ['pattern'=>'<controller:(industrial-battery|lithium-battery18650|lithium-ion-battery|lifepo4-battery|lithium-battery-cell|lithium-polymer-battery|energy-storage-battery|lithium-power-battery|special-battery|low-temperature-battery|wide-temperature-battery|lithium-titanate-battery|explosion-proof-battery)>/list-<list:.+>','route'=>'<controller>','suffix'=>'/'],

                ['pattern'=>'<controller:(industrial-battery|lithium-battery18650|lithium-ion-battery|lifepo4-battery|lithium-battery-cell|lithium-polymer-battery|energy-storage-battery|lithium-power-battery|special-battery|low-temperature-battery|wide-temperature-battery|lithium-titanate-battery|explosion-proof-battery|company-news|industry-news|battery-knowledge|case|military|robotic|medical|instrument|survey|handheld)>/<page:\d+>','route'=>'<controller>/index','suffix'=>'/'],

                ['pattern'=>'<controller:(news|case|form)>/<action:\w+>','route'=>'<controller>/<action>','suffix'=>'.html'],

                [
                    'pattern' => 'product-list',
                    'route' => 'site/product-list',
                    'suffix' => '.xml',
                ],
                [
                    'pattern' => 'product-detail',
                    'route' => 'site/product-detail',
                    'suffix' => '.xml',
                ],
                [
                    'pattern' => 'industry-news',
                    'route' => 'site/industry-news',
                    'suffix' => '.xml',
                ],
                [
                    'pattern' => 'battery-knowledge',
                    'route' => 'site/battery-knowledge',
                    'suffix' => '.xml',
                ],

                [
                    'pattern' => 'best-18650-lithium-battery-pack',
                    'route' => 'column/best18650',
                    'suffix' => '/',
                ],
                [
                    'pattern' => 'cylindrical-lithium-ion-battery',
                    'route' => 'column/cylindrical-battery',
                    'suffix' => '/',
                ],
           



            ],

        ],

        'errorHandler'=>array(

            // use 'site/error' action to display errors

            'errorAction'=>'size/error',

        ),



    ],

    'params' => $params,

];

