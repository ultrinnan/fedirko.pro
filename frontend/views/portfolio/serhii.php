<?php
//use Yii;
use yii\helpers\Url;
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $projects \common\models\Projects */

$this->title = 'Serhii\'s Portfolio';

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
