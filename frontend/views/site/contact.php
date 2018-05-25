<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

$this->title = 'Contact us! | FEDIRKO.PRO';

Yii::$app->params['og_title']['content'] = $this->title;
Yii::$app->params['og_image']['content'] = Url::to('@web/images/bg/contactus-bg.jpg', 'https');
Yii::$app->params['og_description']['content'] = 'If you have business inquiries or other questions, please fill out the following form to contact us.';
Yii::$app->params['default_description']['content'] = 'If you have business inquiries or other questions, please fill out the following form to contact us.';

$this->registerCss(".first { background: url('/images/bg/contactus-bg.jpg') no-repeat center; background-size: cover;}");
?>
<section class="first">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Contact us!</h1>
                <h2>If you have business inquiries or other questions, please fill out the following form to contact us.</h2>
            </div>
        </div>
    </div>
</section>
<!--todo: rework contact page, create categories, attachments etc.-->
<section class="contact_page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-md-4 captcha_box" >{image}</div><div class="col-md-8">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'button dark_button', 'name' => 'contact-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>
