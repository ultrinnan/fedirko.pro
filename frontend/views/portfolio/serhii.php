<?php
/* @var $this yii\web\View */
/* @var $projects \common\models\Projects */

use yii\helpers\Url;

$this->title = 'Serhii\'s Portfolio | FEDIRKO.PRO';

Yii::$app->params['og_title']['content'] = $this->title;
Yii::$app->params['og_image']['content'] = Url::to('@web/images/bg/serhii_bg.jpg', 'https');
Yii::$app->params['og_description']['content'] = 'Serhii Fedirko portfolio page.';
Yii::$app->params['default_description']['content'] = 'Serhii Fedirko portfolio page.';

$this->registerCss(".first { background: url('/images/bg/serhii_bg.jpg') no-repeat center; background-size: cover;}");
?>

<section class="first">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>SERHII'S PORTFOLIO</h1>
            </div>
        </div>
    </div>
</section>
<?php
    echo $this->render('_portfolio_list', ['projects' => $projects]);
?>
<?php
    echo $this->render('/site/_call_to_action');
?>
