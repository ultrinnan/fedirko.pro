<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\Lang;
use common\models\Engines;

/* @var $this yii\web\View */
/* @var $model common\models\Projects */
/* @throws Exception */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

frontend\assets\FancyAsset::register($this);
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
	        [
		        'attribute' => 'Project name',
		        'label' => 'Project name',
		        'value' => function($model){
			        $trans = $model::getProjectTranslation($model->id);
			        if ($trans){
				        return $trans->name;
			        } else return null;
		        }
	        ],
	        [
		        'attribute' => 'by_serhii',
		        'value' => function($model){
			        if ($model->by_serhii == 1){
				        return 'yes';
			        } else {
				        return 'no';
			        }
		        }
	        ],
	        [
		        'attribute' => 'by_mary',
		        'value' => function($model){
			        if ($model->by_mary == 1){
				        return 'yes';
			        } else {
				        return 'no';
			        }
		        }
	        ],
            'url:url',
	        [
		        'attribute' => 'engine',
		        'format' => 'raw',
		        'value' => function($model){
			        $engine = Engines::getEngine($model->engine);
			        return $engine->logo ? '<img class="back_tech_logos" src="' . $engine->logo . '" title="' . $engine->name . '">' : $engine->name;
		        }
	        ],
            [
		        'attribute' => 'Used techs',
		        'format' => 'raw',
		        'value' => function($model){
			        $techs = $model::getProjectTechs($model->id);
			        foreach ($techs as $tech){
//			            echo '<span class="tech">' . $tech->name . '</span>';
			            var_dump($tech);
                    }
			        return true;
		        }
	        ],
            'created_at:datetime',
            'updated_at:datetime',
            'publish_date:datetime',
	        [
		        'attribute' => 'status',
		        'value' => function($model){
			        if ($model->status == 1){
				        return 'visible';
			        } else {
				        return 'hidden';
			        }
		        }
	        ],
            [
		        'attribute' => 'favorite',
		        'value' => function($model){
			        if ($model->favorite == 1){
				        return 'yes';
			        } else {
				        return 'no';
			        }
		        }
	        ],
        ],
    ]) ?>

    <ul class="nav nav-tabs">
		<?php
		for ($i = 0; $i < count($page); $i++){
			$class_active = $i == 0 ? 'class="active"' : '';
			echo '<li ' . $class_active . '><a data-toggle="tab" href="#tab' . $i . '">' . Lang::getNameById($page[$i]['lang_id']) . '</a></li>';
		}
		?>
    </ul>

    <div class="tab-content">
		<?php
		for ($i = 0; $i < count($page); $i++){
			$active_class = $i == 0 ? 'in active' : '';
        ?>
            <div id="tab<?=$i?>" class="tab-pane fade <?=$active_class;?>">
                <p><b>Project Name: </b><br><?=$page[$i]['name']?></p>
                <p><b>Short description: </b><br><?=$page[$i]['short_desc']?></p>
                <p><b>Long description: </b><br><?=$page[$i]['long_desc']?></p>
            </div>
        <?php
		}
		?>
    </div>

    <div class="images">
        <?php
        foreach ($images as $img){
            if ($img->main == 1){
                echo '<a data-fancybox="gallery" href="/images/projects/' . $model->id . '/' . $img->img . '"><img class="main" src="/images/projects/' . $model->id . '/' . $img->thumb . '"></a>';
            } else {
	            echo '<a data-fancybox="gallery" href="/images/projects/' . $model->id . '/' . $img->img . '"><img src="/images/projects/' . $model->id . '/' . $img->thumb . '"></a>';
            }
        }
        ?>
    </div>

</div>