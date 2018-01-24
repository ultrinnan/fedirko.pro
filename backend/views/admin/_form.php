<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;


/* @var $this yii\web\View */
/* @var $model backend\models\Admin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <hr>
    <?php
    echo $form->field($model, 'avatar')->widget(FileInput::classname(), [
        'options' => [
            'multiple' => false
        ],
        'pluginOptions' => [
            'showUpload' => false,
            'showRemove' => false,
            //                'deleteUrl' => "file-delete",
            //                'uploadUrl' => "file-upload?id=".$model->id,
            'initialPreview' => $model->avatar ? '/images/avatars/' . \yii\helpers\ArrayHelper::getValue($model, 'avatar') : '/images/avatars/default_user.svg',
            'initialPreviewAsData' => true,
            'initialPreviewShowDelete' => false,
            'fileActionSettings' => [
                'showDrag' => false,
                'showZoom' => false,
            ],
            'initialCaption' => "Your current avatar",
            'overwriteInitial' => true,
            'maxFileSize' => 3000
        ],
    ]);
    ?>
    <hr>
    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<!-- Trigger the modal with a button -->
<hr>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Change password</button>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Change Password</h4>
            </div>
            <div class="modal-body">
                <form action="changepassword" method="post">
                    <?=Html::hiddenInput(Yii::$app->getRequest()->csrfParam, Yii::$app->getRequest()->getCsrfToken(), []);?>
                    <input type="hidden" name="id" id="id" value="<?=$model->id;?>">
                    <div class="form-group">
                        <label for="new_password" class="control-label">New password</label>
                        <input type="password" class="form-control" id="new_password" name="new_password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Confirm change</button>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>

    </div>
</div>
