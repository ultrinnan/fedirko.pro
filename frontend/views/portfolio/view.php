<?php

/* @var $this yii\web\View */
/* @var $project array \common\models\Projects */
/* @var $slider array \common\models\Projects */

use yii\helpers\Url;
use frontend\assets\FancyAsset;

FancyAsset::register($this);

if ( $project['by_serhii'] && $project['by_mary'] ) {
    $concat = ', ';
} elseif ( $project['by_serhii'] || $project['by_mary'] ) {
    $concat = '';
} else {
    return null;
}
$serhii = $project['by_serhii'] ? 'Serhii Fedirko' : '';
$mary   = $project['by_mary'] ? 'Mary Fedirko' : '';

$this->title = $project['name'];

Yii::$app->params['og_title']['content'] = $this->title;
Yii::$app->params['og_image']['content'] = Url::to('@web/images/projects/' . $project['project_id'] . '/' . $project['pictures']['main']['img'], 'https');
Yii::$app->params['og_description']['content'] = $project['short_desc'];
Yii::$app->params['default_description']['content'] = $project['short_desc'];
Yii::$app->params['default_author']['content'] = $serhii . $concat . $mary;

$url_exists = strpos(@get_headers($project['url'])[0],'200') === false ? false : true;
?>
<section class="first view_project">
    <div class="first_bg" style="background: #39675a url('/images/projects/<?=$project['project_id'] . '/' . $project['pictures']['main']['img']?>') center top no-repeat; background-size: cover;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?=$project['name'];?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 project_engine">
                <p>Works on</p>
                <?php
                if ($project['engine']->logo != ''){
                    echo '<img src="' . $project['engine']->logo . '" alt="' . $project['engine']->name . '">';
                } else {
                    echo '<div class="engine">' . $project['engine']->name . '</div>';
                }
                ?>
            </div>
            <div class="col-md-6 project_techlist">
                <p>Technologies</p>
                <?php
                foreach ($project['tech_list'] as $tech){
                    echo '<div class="project_tech">' . $tech['name'] . '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>About project</h2>
                <?=$project['long_desc'];?>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <?php
            //if more than one image
            if (isset($project['pictures']['all'])) {
                ?>
                <div class="col-md-6 project_pictures_main">
                    <a data-fancybox="<?=$project['id'];?>" href="/images/projects/<?=$project['project_id'] . '/' . $project['pictures']['main']['img'];?>" title="<?=$project['name'];?> example picture">
                        <img src="/images/projects/<?=$project['project_id'] . '/' . $project['pictures']['main']['thumb'];?>" alt="<?=$project['name'];?> example picture">
                    </a>
                </div>
                <div class="col-md-6 project_pictures">
                    <?php
                    foreach ($project['pictures']['all'] as $picture) {
                        echo '<a data-fancybox="' . $project['id'] . '" href="/images/projects/' . $project['project_id'] . '/' . $picture['img'] . '" title="' . $project['name'] . ' example picture"><img src="/images/projects/' . $project['project_id'] . '/' . $picture['thumb'] . '" alt="' . $project['name'] . ' example picture"></a>';
                    }
                    ?>
                </div>
                <?php
            } else {
                ?>
                <div class="col-md-12 project_pictures_main">
                    <a data-fancybox="<?=$project['id'];?>" href="/images/projects/<?=$project['project_id'] . '/' . $project['pictures']['main']['img'];?>" title="<?=$project['name'];?> example picture">
                        <img src="/images/projects/<?=$project['project_id'] . '/' . $project['pictures']['main']['img'];?>" alt="<?=$project['name'];?> example picture">
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
<!--<section>-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                --><?php
//                //todo: uncomment after seohide implementation
////                if ($url_exists){
////                    echo '<h3><a href="' . $project['url']. '">' . $project['url']. '</a></h3>';
////                }
//                ?>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<?php

echo $this->render('/site/_social_sharing');

if ($slider){
    $related_items = '';
    $slider_count = count($slider);

    for ($i=0; $i < $slider_count; $i++) {
        $techs = '';
        foreach ($slider[$i]['tech_list'] as $tech){
            $techs .= '<div class="related_tech">' . $tech['name'] . '</div>';
        }
        $related_items .= '
            <div class="project">
                <div class="bg" style="background: #39675a url(/images/projects/' . $slider[$i]['project_id'] . '/' . $slider[$i]['pictures']['main']['img'] . ') center top no-repeat; background-size: cover;"></div>
                <div class="slider_box">
                    <div class="related_left">
                        <h3>' . $slider[$i]['name'] . '</h3>
                        <p>' . $slider[$i]['short_desc'] . '</p>
                        <p>Works on <strong>' . $slider[$i]['engine']['name'] .'</strong></p>
                        <p>Technologies:</p>
                            ' . $techs . '
                    </div>
                    <div class="related_right">
                        <a href="/portfolio/view/' . $slider[$i]['project_id'] .'" style="background: #39675a url(/images/projects/' . $slider[$i]['project_id'] . '/' . $slider[$i]['pictures']['main']['thumb'] . ') center no-repeat; background-size: cover;"></a>
                    </div>
                    <a class="read_more" href="/portfolio/view/' . $slider[$i]['project_id'] .'">Read more</a>
                </div>
            </div>';
    }
?>
    <section class="related_projects">
        <h3 class="slider_title">RELATED PROJECTS</h3>
        <div class="slider">
            <?=$related_items;?>
        </div>
        <div class="prev prev_project"></div>
        <div class="next next_project"></div>
    </section>
<?php
}
    echo $this->render('/site/_call_to_action');
?>