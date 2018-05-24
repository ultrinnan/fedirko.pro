<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * fancy box asset bundle.
 */
class FancyAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'libs/fancybox/jquery.fancybox.min.css',
    ];
    public $js = [
        'libs/fancybox/jquery.fancybox.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
    public $cssOptions = [
        'async' => 'async',
    ];
    public $jsOptions = [
        'async' => 'async',
    ];
}