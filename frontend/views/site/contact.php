<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact us!';

$this->registerCss(".first { background: url('/images/bg/contactus-bg.jpg') no-repeat center; background-size: cover;}");
?>
<section class="first">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?=$this->title;?></h1>
                <h3>If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.</h3>
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
                    'template' => '<div class="row"><div class="col-md-3">{image}</div><div class="col-md-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'button dark_button', 'name' => 'contact-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>
