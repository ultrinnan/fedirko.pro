<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/admin.css',
    ];
    public $js = [
        'js/admin.js',
    ];
    public $depends = [
	    'dmstr\web\AdminLteAsset',
        'yii\web\YiiAsset',
	    'yii\jui\JuiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
