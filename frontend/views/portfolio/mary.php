<?php
/* @var $this yii\web\View */
/* @var $projects \common\models\Projects */

use yii\helpers\Url;

$this->title = 'Mary\'s Portfolio | FEDIRKO.PRO';

Yii::$app->params['og_title']['content'] = $this->title;
Yii::$app->params['og_image']['content'] = Url::to('@web/images/bg/mary_bg.jpg', 'https');
Yii::$app->params['og_description']['content'] = 'Mary Fedirko portfolio page.';
Yii::$app->params['default_description']['content'] = 'Mary Fedirko portfolio page.';
Yii::$app->params['default_author']['content'] = 'Mary Fedirko';

$this->registerCss(".first { background: url('/images/bg/mary_bg.jpg') no-repeat center; background-size: cover;}");
?>
<section class="first">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>MARY'S PORTFOLIO</h1>
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
