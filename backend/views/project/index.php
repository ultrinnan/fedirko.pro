<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

    <p>
        <?= Html::a('Create Project', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'by_serhii',
            'by_mary',
//            'url:url',
            'name',
             'short_desc',
            // 'long_desc:ntext',
             'engine',
             'create_date',
            // 'publish_date',
             'status',
             'favorite',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
