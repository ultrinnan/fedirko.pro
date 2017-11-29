<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Lang;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Projects */
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

    <?= $form->field($model, 'by_serhii')->checkbox() ?>

    <?= $form->field($model, 'by_mary')->checkbox() ?>

    <?= $form->field($model,'publish_date')->widget(DatePicker::className(),[]);?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <?= $form->field($model, 'favorite')->checkbox() ?>

	<?php
		        //var_dump($page);
	?>
    <ul class="nav nav-tabs">
		<?php
		for ($i = 0; $i < count($page); $i++){
			if ($i == 0){
				echo '<li class="active"><a data-toggle="tab" href="#tab' . $i . '">' . Lang::getNameById($page[$i]['lang_id']) . '</a></li>';
			} else {
				echo '<li><a data-toggle="tab" href="#tab' . $i . '">' . Lang::getNameById($page[$i]['lang_id']) . '</a></li>';
			}
		}
		?>
    </ul>

    <div class="tab-content">
		<?php
		for ($i = 0; $i < count($page); $i++){
			if ($i == 0){
				?>
                <div id="tab<?=$i?>" class="tab-pane fade in active">
                    <input type="hidden" name="lang[<?=$i?>][page_id]" value="<?=$model->id?>">
                    <input type="hidden" name="lang[<?=$i?>][lang_id]" value="<?=$page[$i]['lang_id']?>">
                    <div class="form-group required">
                        <label class="control-label" for="pages-title<?=$i?>">Title</label>
                        <input type="text" id="pages-title<?=$i?>" class="form-control" name="lang[<?=$i?>][title]" value="<?=$page[$i]['title']?>" maxlength="255" aria-required="true" aria-invalid="false">
                    </div>
                    <div class="form-group required">
                        <label class="control-label" for="pages-menu_name<?=$i?>">Menu name</label>
                        <input type="text" id="pages-menu_name<?=$i?>" class="form-control" name="lang[<?=$i?>][menu_name]" value="<?=$page[$i]['menu_name']?>" maxlength="32" aria-required="true" aria-invalid="false">
                    </div>
                    <div class="form-group required">
                        <label class="control-label" for="pages-text<?=$i?>">Text</label>
                        <textarea id="pages-text<?=$i?>" class="form-control editor" name="lang[<?=$i?>][text]" aria-required="true"><?=$page[$i]['text']?></textarea>
                    </div>
                </div>
				<?php
			} else {
				?>
                <div id="tab<?=$i?>" class="tab-pane fade">
                    <input type="hidden" name="lang[<?=$i?>][page_id]" value="<?=$model->id?>">
                    <input type="hidden" name="lang[<?=$i?>][lang_id]" value="<?=$page[$i]['lang_id']?>">
                    <div class="form-group required">
                        <label class="control-label" for="pages-title<?=$i?>">Title</label>
                        <input type="text" id="pages-title<?=$i?>" class="form-control" name="lang[<?=$i?>][title]" value="<?=$page[$i]['title']?>" maxlength="255" aria-required="true" aria-invalid="false">
                    </div>
                    <div class="form-group required">
                        <label class="control-label" for="pages-menu_name<?=$i?>">Menu name</label>
                        <input type="text" id="pages-menu_name<?=$i?>" class="form-control" name="lang[<?=$i?>][menu_name]" value="<?=$page[$i]['menu_name']?>" maxlength="32" aria-required="true" aria-invalid="false">
                    </div>
                    <div class="form-group required">
                        <label class="control-label" for="pages-text<?=$i?>">Text</label>
                        <textarea id="pages-text<?=$i?>" class="form-control editor" name="lang[<?=$i?>][text]" aria-required="true"><?=$page[$i]['text']?></textarea>
                    </div>
                </div>
				<?php
			}
		}
		?>
    </div>

    <div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

	<?php ActiveForm::end(); ?>

</div>
