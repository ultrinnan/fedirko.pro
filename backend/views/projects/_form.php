<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Lang;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;
use kartik\file\FileInput;
use kartik\widgets\Select2;


/* @var $this yii\web\View */
/* @var $model common\models\Projects */
/* @var $page common\models\ProjectsLangs */
/* @var $images common\models\ProjectsImages */
/* @var $techs common\models\ProjectsTechs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projects-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'engine')
	         ->dropDownList(ArrayHelper::map(\common\models\Engines::find()->asArray()->all(),'id', 'name'),
		         [
			         'options' => [
				         $model->engine => ['selected'=>true],
				         'prompt' => ' -- Select Engine -- '
			         ]
		         ])->label('Engine'); ?>

    <?= $form->field($techs, 'tech_id[]')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(\common\models\Techs::find()->asArray()->all(),'id', 'name'),
            'options' => [
                'placeholder' => 'Select techs',
                'multiple' => true
            ],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?= $form->field($model, 'by_serhii')->checkbox() ?>

    <?= $form->field($model, 'by_mary')->checkbox() ?>

    <?= $form->field($model,'publish_date')->widget(DatePicker::className(),[]);?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <?= $form->field($model, 'favorite')->checkbox() ?>

    <ul class="nav nav-tabs">
		<?php
		for ($i = 0; $i < count($page); $i++){
		    $class_active = $i == 0 ? 'class="active"' : '';
            echo '<li ' . $class_active . '><a data-toggle="tab" href="#tab' . $i . '">' . Lang::getNameById($page[$i]['lang_id']) . '</a></li>';
		}
		?>
    </ul>

    <div class="tab-content">
		<?php
		for ($i = 0; $i < count($page); $i++){
			$active_class = $i ==0 ? 'in active' : '';
        ?>
                <div id="tab<?=$i?>" class="tab-pane fade <?=$active_class;?>">
                    <input type="hidden" name="lang[<?=$i?>][lang_id]" value="<?=$page[$i]['lang_id']?>">
                    <input type="hidden" name="lang[<?=$i?>][project_id]" value="<?=$model->id?>">
                    <div class="form-group required">
                        <label class="control-label" for="project_name<?=$i?>">Project Name</label>
                        <input type="text" id="project_name<?=$i?>" class="form-control" name="lang[<?=$i?>][name]" value="<?=$page[$i]['name']?>" maxlength="255" aria-required="true" aria-invalid="false">
                    </div>
                    <div class="form-group required">
                        <label class="control-label" for="project_short<?=$i?>">Short description</label>
                        <input type="text" id="project_short<?=$i?>" class="form-control" name="lang[<?=$i?>][short_desc]" value="<?=$page[$i]['short_desc']?>" maxlength="255" aria-required="true" aria-invalid="false">
                    </div>
                    <div class="form-group required">
                        <label class="control-label" for="project_long<?=$i?>">Long description</label>
                        <textarea id="project_long<?=$i?>" class="form-control editor" name="lang[<?=$i?>][long_desc]" aria-required="true"><?=$page[$i]['long_desc']?></textarea>
                    </div>
                </div>
        <?php
		}
		?>
    </div>

    <div>
        <?php
        echo $form->field($images, 'img[]')->widget(FileInput::classname(), [
            'options' =>
                [
                    'accept' => 'image/jpeg',
                    'multiple' => true,
                ],
            'pluginOptions' =>
                [
	                'showUpload' => false
                ]
        ])->label('Select images for project (first image will be project\'s main)');
        ?>
    </div>

    <div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

	<?php ActiveForm::end(); ?>

</div>
