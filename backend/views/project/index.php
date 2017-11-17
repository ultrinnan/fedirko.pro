<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Engines;

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
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'author',
                'label' => 'Author',
                'value' => function($model) {
                    if ($model->by_serhii && $model->by_mary){
                        $concat = ', ';
                    } else {
                        $concat = '';
                    }
                    $serhii = $model->by_serhii ? 'Serhii' : '';
                    $mary = $model->by_mary ? 'Mary' : '';
                    return $serhii  . $concat . $mary ;
                },
            ],

//            'by_serhii',
//            'by_mary',
//            'url:url',
            'name',
            'short_desc',
            // 'long_desc:ntext',
            [
                'attribute' => 'engine',
                'value' => function($model){
                    $tech = Engines::getEngine($model->engine);
                    return $tech['name'];
                }

            ],
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:d M Y, h:i:s']
            ],
            // 'publish_date',
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => function($model) {
                    return $model->status ? '<i class="visible fa fa-eye" title="visible"></i>' : '<i class="visible fa fa-eye-slash" title="hidden"></i>';
                },
            ],
            [
                'attribute' => 'favorite',
                'format' => 'raw',
                'value' => function($model) {
                    return $model->status ? '<i class="favorite fa fa-star" title="remove from favorites"></i>' : '<i class="favorite fa fa-star-o" title="add to favorites"></i>';
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
