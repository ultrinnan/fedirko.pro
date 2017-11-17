<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Admin;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AdminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Family members';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            todo: add avatars for admins
	        'avatar',

	        'email',
	        'first_name',
	        'last_name',
            [
                'attribute' => 'updated_at',
                'format' => ['date', 'php:d M Y, h:i:s']
            ],

	        ['class' => 'yii\grid\ActionColumn', 'template' => '{view} {update}'],
        ],
    ]); ?>
</div>
