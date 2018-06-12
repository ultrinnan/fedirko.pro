<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'WP plugin F-Tools | FEDIRKO.PRO';

Yii::$app->params['og_title']['content'] = $this->title;
Yii::$app->params['og_image']['content'] = Url::to('@web/images/bg/solutions/wordpress.jpg', 'https');
Yii::$app->params['og_description']['content'] = 'Wordpress plugin with many useful tools for your site.';
Yii::$app->params['default_description']['content'] = 'Wordpress plugin with many useful tools for your site.';

$this->registerCss(".first { background: url('/images/bg/solutions/wordpress.jpg') no-repeat center; background-size: cover;}");
?>
<section class="first">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>WP plugin F-Tools</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Wordpress plugin with many useful tools for your site.</p>
                <a target="_blank" href="https://github.com/ultrinnan/f-tools">Check it on GitHub</a>
            </div>
        </div>
    </div>
</section>

<?php
    echo $this->render('/site/_call_to_action');
?>