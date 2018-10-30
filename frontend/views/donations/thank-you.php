<?php

/* @var $this yii\web\View */
/* @var $projects \common\models\Donations */

use yii\helpers\Url;

$this->title = 'Donations | FEDIRKO.PRO';

Yii::$app->params['og_title']['content'] = $this->title;
Yii::$app->params['og_image']['content'] = Url::to('@web/images/bg/donate_bg.jpg', 'https');
Yii::$app->params['og_description']['content'] = 'Support development of free and open-source software! Donate to FEDIRKO.PRO.';
Yii::$app->params['default_description']['content'] = 'Support development of free and open-source software! Donate to FEDIRKO.PRO.';

$this->registerCss(".first { background: url('/images/bg/donate_bg.jpg') no-repeat center; background-size: cover;}");
?>
    <section class="first">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Thank you!</h1>
                    <h2>Your support will help us to do more cool software and tools!</h2>
                </div>
            </div>
        </div>
    </section>

<?php
echo $this->render('/site/_call_to_action');
?>