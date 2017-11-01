<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;

$this->registerCss(".first { background: url('/images/bg/404.jpg')no-repeat center center fixed;}");
?>

<section class="first error_page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><?= Html::encode($this->title) ?></h1>
                <div class="alert alert-danger">
                    <?= nl2br(Html::encode($message)) ?>
                </div>
                <p>The above error occurred while the Web server was processing your request.</p>
                <p>Please contact us if you think this is a server error. Thank you.</p>
                <a id="go_home" href="<?= Yii::$app->homeUrl ?>">Go to Homepage</a>
            </div>
        </div>
    </div>
</section>
