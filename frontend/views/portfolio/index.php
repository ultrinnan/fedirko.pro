<?php

/* @var $this yii\web\View */
/* @var $projects \common\models\Projects */

use yii\helpers\Url;

$this->title = 'Portfolio | FEDIRKO.PRO';

Yii::$app->params['og_title']['content'] = $this->title;
Yii::$app->params['og_image']['content'] = Url::to('@web/images/bg/serhii_bg.jpg', 'https');
Yii::$app->params['og_description']['content'] = 'General portfolio page for FEDIRKO.PRO.';
Yii::$app->params['default_description']['content'] = 'General portfolio page for FEDIRKO.PRO.';

$this->registerCss(".first { background: url('/images/bg/serhii_bg.jpg') no-repeat center; background-size: cover;}");
?>
<section class="first">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>OUR PORTFOLIO</h1>
<!--                todo: implement filters-->
<!--                <h3>you can sort projects by selecting filters</h3>-->
            </div>
        </div>
    </div>
</section>

<?php
    echo $this->render('_portfolio_list', ['projects' => $projects]);

    echo $this->render('/site/_call_to_action');
?>