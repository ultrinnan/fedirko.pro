<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Engines */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Engines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="engines-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
	        [
		        'attribute' => 'logo',
		        'format' => 'raw',
		        'value' => function($model) {
			        return $model->logo ? '<img src="' . $model->logo . '" alt="' . $model->name . '">' : '';
		        },
	        ],
        ],
    ]) ?>

</div>
