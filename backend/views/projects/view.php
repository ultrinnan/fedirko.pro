<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\Lang;

/* @var $this yii\web\View */
/* @var $model common\models\Projects */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projects-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'by_serhii',
            'by_mary',
            'url:url',
            'engine',
            'created_at',
            'updated_at',
            'publish_date',
            'status',
            'favorite',
        ],
    ]) ?>

    <p>
		<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
		<?= Html::a('Delete', ['delete', 'id' => $model->id], [
			'class' => 'btn btn-danger',
			'data' => [
				'confirm' => 'Are you sure you want to delete this item?',
				'method' => 'post',
			],
		]) ?>
    </p>
	<?php
	//        var_dump($page);
	?>
    <ul class="nav nav-tabs">
		<?php
		for ($i = 0; $i < count($page); $i++){
			if ($i == 0){
				echo '<li class="active"><a data-toggle="tab" href="#tab' . $i . '">' . Lang::getNameById($page[$i]['lang_id']) . '</a></li>';
			} else {
				echo '<li><a data-toggle="tab" href="#tab' . $i . '">' . Lang::getNameById($page[$i]['lang_id']) . '</a></li>';
			}
		}
		?>
    </ul>

    <div class="tab-content">
		<?php
		for ($i = 0; $i < count($page); $i++){
			if ($i == 0){
				echo '<div id="tab' . $i . '" class="tab-pane fade in active">
                        <p><b>Title:</b> ' . $page[$i]['title'] . '</p>
                        <p><b>Menu name:</b> ' . $page[$i]['menu_name'] . '</p>
                        <p><b>Text:</b> ' . $page[$i]['text'] . '</p>
                    </div>';
			} else {
				echo '<div id="tab' . $i . '" class="tab-pane fade">
                        <p><b>Title:</b> ' . $page[$i]['title'] . '</p>
                        <p><b>Menu name:</b> ' . $page[$i]['menu_name'] . '</p>
                        <p><b>Text:</b> ' . $page[$i]['text'] . '</p>
                    </div>';
			}
		}
		?>
    </div>

</div>
