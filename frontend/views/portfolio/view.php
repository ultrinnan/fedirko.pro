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
<section>
    <div class="container-fluid">
        <div class="row">
        <h3>RELATED PROJECTS</h3>
        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="/images/screenshots/80001.png" alt="Chania" width="460" height="345">
                </div>

                <div class="item">
                    <img src="/images/screenshots/altis1.png" alt="Chania" width="460" height="345">
                </div>

                <div class="item">
                    <img src="/images/screenshots/Dinadis1.png" alt="Flower" width="460" height="345">
                </div>

                <div class="item">
                    <img src="/images/screenshots/transradar1.png" alt="Flower" width="460" height="345">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
    </div>
</section>
<section class="call_to_action">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>WANT TO START A PROJECT?</h2>
                It's simple.
                <a class="contact_button" href="site/contact">contact us</a>

            </div>
        </div>
    </div>
</section>