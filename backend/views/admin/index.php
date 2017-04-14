<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Admin;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AdminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Site Administrators';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Admin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'email',
            'first_name',
            'last_name',
            [
                'attribute' => 'status',
                'content' => function($data){
                    return Admin::getStatus($data->status);
                }
            ],
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:d M Y, h:i:s']
            ],
            [
                'attribute' => 'updated_at',
                'format' => ['date', 'php:d M Y, h:i:s']
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
