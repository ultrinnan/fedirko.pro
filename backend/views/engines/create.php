<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Engines */

$this->title = 'Create Engines';
$this->params['breadcrumbs'][] = ['label' => 'Engines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="engines-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
