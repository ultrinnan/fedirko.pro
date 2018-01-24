<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Admin;

/* @var $this yii\web\View */
/* @var $model backend\models\Admin */

$this->title = 'View family member - ' . $model->first_name . ' ' . $model->last_name;
$this->params['breadcrumbs'][] = ['label' => 'Family', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-view">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>
    <?php
    try {
        echo DetailView::widget([
            'model' => $model,
            'attributes' => [
                [
                    'attribute' => 'avatar',
                    'format' => 'raw',
                    'value' => function ($model) {
                        return $model->avatar ? '<img class="avatar img-circle" src="/images/avatars/' . $model->avatar . '">' : '<img class="avatar img-circle" src="/images/avatars/default_user.svg" alt="No avatar">';
                    }

                ],
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
        ]);
    } catch (Exception $e) {
        //error should be here
    }
    ?>

</div>
