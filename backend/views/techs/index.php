<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TechsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Techs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="techs-index">

    <p>
        <?= Html::a('Create Tech', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
