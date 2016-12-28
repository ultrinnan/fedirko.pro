<?php

/* @var $this yii\web\View */

$this->title = $project['name'];

$url_exists = strpos(@get_headers($project['url'])[0],'200') === false ? false : true;
?>
<section class="first view_project">
    <div class="first_bg" style="background: url('<?=$project['pictures']['main']['url']?>') center no-repeat; background-size: cover;">

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