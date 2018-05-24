<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Solutions | FEDIRKO.PRO';

Yii::$app->params['og_title']['content'] = $this->title;
Yii::$app->params['og_image']['content'] = Url::to('@web/images/bg/solutions/solution.jpeg', 'https');
Yii::$app->params['og_description']['content'] = 'Every client is unique. We build solutions for all of them.';
Yii::$app->params['default_description']['content'] = 'Every client is unique. We build solutions for all of them.';

$this->registerCss(".first { background: url('/images/bg/solutions/solution.jpeg') no-repeat center; background-size: cover;}");
?>
<section class="first">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Solutions</h1>
                <h2>Every client is unique.<br>
                    We build solutions for all of them.</h2>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <h3>Here is our favorite expertises</h3>
            <br>
            <div class="col-md-6 col-sm-6">
                <a href="/solutions/full-cycle-development" class="service full_stack clearfix">
                    <div class="icon"></div>
                    <h4>FULL-CYCLE DEVELOPMENT</h4>
                    <div class="desc">Full spectrum of development services spiced with flexible engagement models.</div>
                </a>
            </div>
            <div class="col-md-6 col-sm-6">
                <a href="/solutions/wordpress-solutions" class="service wp">
                    <div class="icon"></div>
                    <h4>WORDPRESS SOLUTIONS</h4>
                    <div class="desc">Professional tools and solutions for any site on most popular CMS.</div>
                </a>
            </div>
            <!--            <div class="col-md-4">-->
            <!--                <a href="/solutions/advanced-web" class="service web">-->
            <!--                    <div class="icon"></div>-->
            <!--                    <h4>ADVANCED WEB</h4>-->
            <!--                    <div class="desc">Productive, engaging and reliable web solutions for business outcomes you deserve.</div>-->
            <!--                </a>-->
            <!--            </div>-->
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <a href="/solutions/mobile-solutions" class="service mobile">
                    <div class="icon"></div>
                    <h4>MOBILE SOLUTIONS</h4>
                    <div class="desc">Mobile integrations and custom tools development for your business.</div>
                </a>
            </div>
            <div class="col-md-6 col-sm-6">
                <a href="/solutions/help-and-support" class="service help">
                    <div class="icon"></div>
                    <h4>HELP AND SUPPORT</h4>
                    <div class="desc">Excellent solution for fast recovery or fix of your existing projects.</div>
                </a>
            </div>
            <!--            <div class="col-md-4">-->
            <!--                <a href="/solutions/cloud" class="service cloud">-->
            <!--                    <div class="icon"></div>-->
            <!--                    <h4>CLOUD</h4>-->
            <!--                    <div class="desc">Powerful cloud-based solutions fused with creative design for private, hybrid & public platforms.</div>-->
            <!--                </a>-->
            <!--            </div>-->
        </div>
    </div>
</section>

<?php
    echo $this->render('/site/_call_to_action');
?>