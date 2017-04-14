<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model backend\models\Admin */

$this->title = 'Create New Administrator';
$this->params['breadcrumbs'][] = ['label' => 'Administrators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="admin-create">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <hr>
    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
    <hr>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= $form->field($model, 'password_confirm')->passwordInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
