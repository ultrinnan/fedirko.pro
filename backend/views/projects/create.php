<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $page common\models\ProjectsLangs */
/* @var $images common\models\ProjectsImages */
/* @var $techs common\models\ProjectsTechs */
/* @var $model common\models\Projects */

$this->title = 'Create Project';
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projects-create">

	<?= $this->render('_form', [
		'page' => $page,
		'images' => $images,
		'techs' => $techs,
		'model' => $model,
	]) ?>

</div>
