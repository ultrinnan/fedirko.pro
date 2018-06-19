<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.min.css'
    ];
    public $js = [
        'js/main.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    //redefine properties for dev environment and connect unminified scripts
    public function init()
    {
        if (YII_ENV_DEV){
            $this->css = [
                'css/main.css'
            ];
            $this->js = [
                'js/main.js'
            ];
        }
        return true;
    }
}