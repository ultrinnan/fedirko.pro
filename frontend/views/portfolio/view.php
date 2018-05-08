<?php

/* @var $this yii\web\View */
/* @var $project array \common\models\Projects */
/* @var $slider array \common\models\Projects */
$this->title = $project['name'];

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
                <img src="<?=$project['engine']->logo;?>" alt="<?=$project['engine']->name?>">
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
                <p><?=$project['long_desc'];?></p>
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
//todo: maybe move to separate partial?
if ($slider){
?>
    <section class="related_projects">
        <div class="container-fluid">
            <div class="row">
                <div id="related_slider" class="carousel slide" data-ride="carousel">
                    <h3>RELATED PROJECTS</h3>
                    <?php
					$indicators = '';
                    $carousel_items = '';
                    for ($i=0; $i<count($slider); $i++) {
						$active_class = $i==0 ? 'active' : '';
						$indicators .= '<li data-target="#related_slider" data-slide-to="' . $i . '" class="' . $active_class. '"></li> ';

						$techs = '';
						foreach ($slider[$i]['tech_list'] as $tech){
							$techs .= '<div class="related_tech">' . $tech['name'] . '</div>';
						}
						$carousel_items .= '
                        <div class="item ' . $active_class . '">
                            <div class="bg" style="background: #39675a url(/images/projects/' . $slider[$i]['project_id'] . '/' . $slider[$i]['pictures']['main']['img'] . ') center top no-repeat; background-size: cover;"></div>
                            <div class="item_box clearfix">
                                <div class="clearfix">
                                    <div class="related_left">
                                        <h3>' . $slider[$i]['name'] . '</h3>
                                        <p>' . $slider[$i]['short_desc'] . '</p>
                                        <p>Works on <strong>' . $slider[$i]['engine']['name'] .'</strong></p>
                                        <p>Technologies:
                                            ' . $techs . '
                                        </p>
                                    </div>
                                    <div class="related_right">
                                        <a href="/portfolio/view/' . $slider[$i]['project_id'] .'" style="background: #39675a url(/images/projects/' . $slider[$i]['project_id'] . '/' . $slider[$i]['pictures']['main']['thumb'] . ') center no-repeat; background-size: cover;"></a>
                                    </div>
                                </div>
                                <a class="read_more" href="/portfolio/view/' . $slider[$i]['project_id'] .'">Read more</a>
                            </div>
                        </div>';
					}
					?>
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
						<?=$indicators;?>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
						<?=$carousel_items;?>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#related_slider" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#related_slider" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php
}
    echo $this->render('/site/_call_to_action');
?>