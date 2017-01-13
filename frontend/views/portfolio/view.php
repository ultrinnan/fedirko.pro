<?php

/* @var $this yii\web\View */

$this->title = $project['name'];

$url_exists = strpos(@get_headers($project['url'])[0],'200') === false ? false : true;
?>
<section class="first view_project">
    <div class="first_bg" style="background: #39675a url('<?=$project['pictures']['main']['url']?>') center no-repeat; background-size: cover;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><?=$project['name'];?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 project_engine">
                <p>Works on</p>
                <img src="<?=$project['engine']['tech_logo'];?>" alt="<?=$project['engine']['name'];?>">
            </div>
            <div class="col-lg-6 project_techlist">
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
            <div class="col-lg-12">
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
            if ($project['pictures']['all']) {
                ?>
                <div class="col-lg-6 project_pictures_main">
                    <a class="fancybox" rel="<?=$project['id'];?>" href="<?=$project['pictures']['main']['url'];?>" title="<?=$project['name'];?> example picture">
                        <img src="<?=$project['pictures']['main']['url'];?>" alt="<?=$project['name'];?> example picture">
                    </a>
                </div>
                <div class="col-lg-6 project_pictures">
                    <?php
                    foreach ($project['pictures']['all'] as $picture) {
                        echo '<a class="fancybox" rel="' . $project['id'] . '" href="' . $picture['url'] . '" title="' . $project['name'] . ' example picture"><img src="' . $picture['url'] . '" alt="' . $project['name'] . ' example picture"></a>';
                    }
                    ?>
                </div>
                <?php
            } else {
                ?>
                <div class="col-lg-12 project_pictures_main">
                    <a class="fancybox" rel="<?=$project['id'];?>" href="<?=$project['pictures']['main']['url'];?>" title="<?=$project['name'];?> example picture">
                        <img src="<?=$project['pictures']['main']['url'];?>" alt="<?=$project['name'];?> example picture">
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                if ($url_exists){
                    echo '<h3><a href="' . $project['url']. '">' . $project['url']. '</a></h3>';
                }
                ?>
            </div>
        </div>
    </div>
</section>
<section class="related_projects">
    <div class="container-fluid">
        <div class="row">
            <h3>RELATED PROJECTS</h3>
            <div id="related_slider" class="carousel slide" data-ride="carousel">
                <?php
                    for ($i=0; $i<count($slider); $i++) {
                        $active_class = $i==0 ? 'active' : '';
                        $indicators .= '<li data-target="#related_slider" data-slide-to="' . $i . '" class="' . $active_class. '"></li> ';

                        $techs = '';
                        foreach ($slider[$i]['tech_list'] as $tech){
                            $techs .= '<div class="related_tech">' . $tech['name'] . '</div>';
                        }
                        $carousel_items .= '
                        <div class="item ' . $active_class . '">
                            <div class="bg" style="background: #39675a url(' . $slider[$i]['pictures']['main']['url'] . ') center no-repeat; background-size: cover;"></div>
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
                                        <a href="/portfolio/view?id=' . $slider[$i]['id'] .'" style="background: #39675a url(' . $slider[$i]['pictures']['main']['url'] . ') center no-repeat; background-size: cover;"></a>
                                    </div>
                                </div>
                                <a class="read_more" href="/portfolio/view?id=' . $slider[$i]['id'] .'">Read more</a>
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
                <a class="left carousel-control" href="#related_slider" role="button" data-slide="prev"></a>
                <a class="right carousel-control" href="#related_slider" role="button" data-slide="next"></a>
            </div>
        </div>
    </div>
</section>
<!--todo: move it to separate view file-->
<section class="call_to_action">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>WANT TO START A PROJECT?</h2>
                It's simple.
                <a class="contact_button" href="/site/contact">contact us</a>
            </div>
        </div>
    </div>
</section>