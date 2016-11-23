<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <a href="/">
        <div id="admin_logo"></div>
    </a>
    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox() ?>

        <div class="form-group">
            <?= Html::submitButton('Login', ['class' => 'btn btn-grey', 'name' => 'login-button']) ?>
        </div>

    <div class="forgot" data-toggle="modal" data-target="#myModal">forgot your password?</div>

    <?php ActiveForm::end(); ?>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <img src="/images/gopniki.png" alt="">
            </div>
        </div>
    </div>
</div>
