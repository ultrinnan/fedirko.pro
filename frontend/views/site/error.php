<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;

$this->registerCss(".first { background: url('/images/bg/404.jpg') no-repeat center; background-size: cover;}");
?>

<section class="first">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?= Html::encode($this->title) ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="error_page">
    <div class="container">
        <div class="row">
            <div class="col-md-12 center">
                <div class="alert alert-danger">
					<?= nl2br(Html::encode($message)) ?>
                </div>
                <p>The above error occurred while the Web server was processing your request.</p>
                <p>Please contact us if you think this is a server error. Thank you.</p>
                <a class="button light_button" href="<?= Yii::$app->homeUrl ?>">Go to Homepage</a>
            </div>
        </div>
    </div>
</section>
