<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Admin */

$this->title = 'Edit Administrator - ' . $model->first_name . ' ' . $model->last_name;
$this->params['breadcrumbs'][] = ['label' => 'Administrators', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->first_name . ' ' . $model->last_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="admin-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
