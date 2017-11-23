<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Techs */

$this->title = 'Update Techs: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Techs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="techs-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
