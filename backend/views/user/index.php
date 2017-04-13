<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Family members';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'email',
            'username',
            [
                'attribute' => 'updated_at',
                'format' => ['date', 'php:d M Y, h:i:s']
            ],

	        ['class' => 'yii\grid\ActionColumn', 'template' => '{view} {update}'],
        ],
    ]); ?>
</div>
