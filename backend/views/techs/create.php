<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Techs */

$this->title = 'Create Techs';
$this->params['breadcrumbs'][] = ['label' => 'Techs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="techs-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
