<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Engines */

$this->title = 'Update Engines: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Engines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="engines-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
