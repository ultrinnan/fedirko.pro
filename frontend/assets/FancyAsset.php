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
        'js/fancy_conf.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}

//http://fancyapps.com/fancybox/3/
//<!-- 1. Add latest jQuery and fancyBox files -->
//
//<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
//
//<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css" />
//<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>
//
//
//<!-- 2. Create links -->
//
//<a data-fancybox="gallery" href="big_1.jpg"><img src="small_1.jpg"></a>
//<a data-fancybox="gallery" href="big_2.jpg"><img src="small_2.jpg"></a>
//
//
//<!-- 3. Have fun! -->