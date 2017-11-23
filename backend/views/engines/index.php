<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\EnginesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Engines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="engines-index">

    <p>
        <?= Html::a('Create Engine', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'name',
	        [
		        'attribute' => 'logo',
		        'format' => 'raw',
		        'value' => function($model) {
			        return $model->logo ? '<img class="back_tech_logos" src="' . $model->logo . '" alt="' . $model->name . '">' : '';
		        },
	        ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
