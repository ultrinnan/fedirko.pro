<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'WordPress solutions | FEDIRKO.PRO';

Yii::$app->params['og_title']['content'] = $this->title;
Yii::$app->params['og_image']['content'] = Url::to('@web/images/bg/solutions/wordpress.jpg', 'https');
Yii::$app->params['og_description']['content'] = 'Wordpress plugins, templates and scripts for your business.';
Yii::$app->params['default_description']['content'] = 'Wordpress plugins, templates and scripts for your business.';

$this->registerCss(".first { background: url('/images/bg/solutions/wordpress.jpg') no-repeat center; background-size: cover;}");
?>
<section class="first">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>WordPress solutions</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Initially created as CMS (Content Managing System) for blogs and simple sites, in 2018 more than 30% of all websites in the world runs on WordPress.</p>
                <p>That's very impressive!</p>
                <p>It's popular because it quite simple and very powerful. Nowadays WordPress can be used for any type of site, and can be scaled from a simple blog to a large systems with custom logic and any type of third party components.</p>
                <p>We have great experience with WordPress and can offer you many efficient solutions for your business.</p>
                <p>Here you can find some of our plugins you can use.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <a href="#"><h2>F-theme WP template. <span class="small">(link coming soon)</span></h2></a>
                    <p>Our default template for WP themes. An entry point for the most of our custom themes. Feel free to use it :)</p>
                </div>
                <div>
                    <a href="/solutions/f-sysinfo-plugin"><h2>WP plugin F-SysInfo.</h2></a>
                    <p>Shows important system information about server configuration as a nice widget in WP dashboard.</p>
                </div>
                <div>
                    <a href="#"><h2>WP Plugin SEOHide. <span class="small">(link coming soon)</span></h2></a>
                    <p>Encodes external links with base64 and converts it dynamically after page rendering. Can be applied for posts/pages/custom post types/etc.</p>
                </div>
                <div>
                    <a href="#"><h2>WP Plugin reCaptcha wrapper. <span class="small">(link coming soon)</span></h2></a>
                    <p>Wrapper for CF7 plugin recaptcha.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    echo $this->render('/site/_call_to_action');
?>