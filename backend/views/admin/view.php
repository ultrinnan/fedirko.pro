<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Admin;

/* @var $this yii\web\View */
/* @var $model backend\models\Admin */

$this->title = 'View Administrator - ' . $model->first_name . ' ' . $model->last_name;
$this->params['breadcrumbs'][] = ['label' => 'Administrators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-view">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'email',
            'first_name',
            'last_name',
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:d M Y, h:i:s']
            ],
            [
                'attribute' => 'updated_at',
                'format' => ['date', 'php:d M Y, h:i:s']
            ],
        ],
    ]) ?>

</div>
