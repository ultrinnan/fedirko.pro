<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projects-index">

    <p>
        <?= Html::a('Create Project', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'by_serhii',
            'by_mary',
            'url:url',
            'engine',
            // 'created_at',
             'updated_at:datetime',
             'publish_date:datetime',
             'status',
             'favorite',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
