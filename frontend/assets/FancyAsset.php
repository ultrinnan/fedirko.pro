<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * fancy box asset bundle.
 * todo: maybe consider using of local copy in case of performance issues?
 */
class FancyAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css',
    ];
    public $js = [
        'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}