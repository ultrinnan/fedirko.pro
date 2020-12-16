<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
	        'baseUrl' => '',
            'csrfParam' => '_csrf-frontend',
            'class' => 'frontend\components\LangRequest',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class'=>'frontend\components\LangUrlManager',
            'rules' => [
	            '/' => 'site/index',
	            '<controller:\w+>/<action:\w+>' => '<controller>/<action>',

                'portfolio' => 'portfolio/index',
                'solutions' => 'solutions/index',
                'donations' => 'donations/index',

                '<alias>' => 'site/<alias>', //all static pages

                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>', //portfolio/view/7

            ],
        ],
        'language'=>'en-US',
        'i18n' => [
	        'translations' => [
		        '*' => [
			        'class' => 'yii\i18n\PhpMessageSource',
			        'basePath' => '@frontend/messages',
			        'sourceLanguage' => 'en',
			        'fileMap' => [
				        'gen' => 'general.php',
			        ],
		        ],
	        ],
        ],
        'assetManager' => [
            'class' => 'yii\web\AssetManager',
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'js' => [
                        //YII_ENV_DEV ? 'jquery.js' : 'jquery.min.js'
                        'jquery.min.js'
                    ],
                ],
                'yii\bootstrap\BootstrapAsset' => [
                    'css' => [
                        'css/bootstrap.min.css',
                    ],
                    'cssOptions' => [
//                        'async' => 'async'
                    ],
                ],
                'yii\bootstrap\BootstrapPluginAsset' => [
                    'js' => [
                        'js/bootstrap.min.js',
                    ],
                    'jsOptions' => [
                        'async' => 'async'
                    ],
                ]
            ],
        ],
    ],
    'params' => $params,
];
