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
        'js/fancybox/source/jquery.fancybox.css?v=2.1.5',
        'css/common.css',
        'css/main.css',
    ];
    public $js = [
        'js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js',
        'js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5',
        'js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}