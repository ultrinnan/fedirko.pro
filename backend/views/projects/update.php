<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Projects */
/* @var $images common\models\ProjectsImages */
/* @var $techs common\models\ProjectsTechs */

$this->title = 'Update Project: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="projects-update">

	<?= $this->render('_form', [
		'page' => $page,
		'model' => $model,
		'images' => $images,
		'techs' => $techs
	]) ?>

</div>
