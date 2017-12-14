<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\Lang;
use common\models\Engines;

/* @var $this yii\web\View */
/* @var $model common\models\Projects */
/* @throws Exception */

$trans = $model::getProjectTranslation( $model->id );
if ( $trans ) {
	$this->title = $trans->name;
} else {
	$this->title = $model->id;
}
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

    <?php
    try {
	    echo DetailView::widget( [
		    'model'      => $model,
		    'attributes' => [
			    'id',
			    [
				    'attribute' => 'Project name',
				    'label'     => 'Project name',
				    'value'     => function ( $model ) {
					    $trans = $model::getProjectTranslation( $model->id );
					    if ( $trans ) {
						    return $trans->name;
					    } else {
						    return null;
					    }
				    }
			    ],
//			    [
//				    'attribute' => 'by_serhii',
//				    'value'     => function ( $model ) {
//					    if ( $model->by_serhii == 1 ) {
//						    return 'yes';
//					    } else {
//						    return 'no';
//					    }
//				    }
//			    ],
//			    [
//				    'attribute' => 'by_mary',
//				    'value'     => function ( $model ) {
//					    if ( $model->by_mary == 1 ) {
//						    return 'yes';
//					    } else {
//						    return 'no';
//					    }
//				    }
//			    ],
			    [
				    'attribute' => 'author',
				    'label'     => 'Author',
				    'value'     => function ( $model ) {
					    if ( $model->by_serhii && $model->by_mary ) {
						    $concat = ', ';
					    } elseif ( $model->by_serhii || $model->by_mary ) {
						    $concat = '';
					    } else {
						    return null;
					    }
					    $serhii = $model->by_serhii ? 'Serhii' : '';
					    $mary   = $model->by_mary ? 'Mary' : '';

					    return $serhii . $concat . $mary;
				    },
			    ],
			    'url:url',
			    [
				    'attribute' => 'engine',
				    'format'    => 'raw',
				    'value'     => function ( $model ) {
					    $engine = Engines::getEngine( $model->engine );

					    return $engine->logo ? '<img class="back_tech_logos" src="' . $engine->logo . '" title="' . $engine->name . '">' : $engine->name;
				    }
			    ],
			    [
				    'attribute' => 'Used techs',
				    'format'    => 'raw',
				    'value'     => function ( $model ) {
					    $techs = $model::getProjectTechs( $model->id );
					    $techs_block = false;
					    foreach ($techs as $tech){
						    $techs_block .= '<span class="tech">' . $tech['name'] . '</span>';
                        }
                        return $techs_block;
				    }
			    ],
			    'created_at:datetime',
			    'updated_at:datetime',
			    'publish_date:datetime',
			    [
				    'attribute' => 'status',
				    'value'     => function ( $model ) {
					    if ( $model->status == 1 ) {
						    return 'visible';
					    } else {
						    return 'hidden';
					    }
				    }
			    ],
			    [
				    'attribute' => 'favorite',
				    'value'     => function ( $model ) {
					    if ( $model->favorite == 1 ) {
						    return 'yes';
					    } else {
						    return 'no';
					    }
				    }
			    ],
		    ],
	    ] );
    } catch ( Exception $e ) {
    }
    ?>

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
                <div class="cont_title">Project Name:</div>
                <div class="cont_text"><?=$page[$i]['name']?></div>

                <div class="cont_title">Short description:</div>
                <div class="cont_text"><?=$page[$i]['short_desc']?></div>

                <div class="cont_title">Long description:</div>
                <div class="cont_text"><?=$page[$i]['long_desc']?></div>
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