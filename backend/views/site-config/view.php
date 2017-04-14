<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SiteConfig */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Site Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-config-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'key',
            'value:ntext',
            'name',
            'description:ntext',
        ],
    ]) ?>

</div>
