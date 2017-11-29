<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Projects */

$this->title = 'Create Project';
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projects-create">

	<?= $this->render('_form', [
		'page' => $page,
		'model' => $model,
	]) ?>

</div>
