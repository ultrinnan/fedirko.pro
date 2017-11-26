<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Engines;

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
	        [
		        'attribute' => 'Thumb',
		        'format' => 'raw',
		        'value' => function($model){
			        $img = $model::getProjectImage($model->id);
//			        var_dump($img);
			        return '<img class="back_tech_logos" src="/images/projects/' . $model->id . '/' . $img->thumb . '">';
		        }

	        ],
	        [
		        'attribute' => 'Project name',
		        'label' => 'Project name',
		        'value' => function($model){
			        $trans = $model::getProjectTranslation($model->id);
			        return $trans->name;
		        }
	        ],

//            'by_serhii',
//            'by_mary',
            'url:url',
	        [
		        'attribute' => 'engine',
		        'format' => 'raw',
		        'value' => function($model){
			        $engine = Engines::getEngine($model->engine);
			        return $engine->logo ? '<img class="back_tech_logos" src="' . $engine->logo . '" title="' . $engine->name . '">' : $engine->name;
		        }

	        ],
            // 'created_at',
//             'updated_at:datetime',
             'publish_date:datetime',
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
