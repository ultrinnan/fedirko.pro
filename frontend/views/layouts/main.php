<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
use frontend\widgets\WLang;

AppAsset::register($this);

$mainItems = [
    [
        'label' => 'professionals',
        'url' => Yii::$app->homeUrl,
        'items' => [
            [
                'label' => 'About',
                'url' => '/about',
                'active' => \Yii::$app->controller->action->id === 'about',
            ],
            [
                'label' => 'How we work',
                'url' => '/how-we-work',
                'active' => \Yii::$app->controller->action->id === 'how-we-work',
            ],
            [
                'label' => 'Proof of Concept',
                'url' => '/proof-of-concept',
                'active' => \Yii::$app->controller->action->id === 'proof-of-concept',
            ],
            [
                'label' => 'Terms and conditions',
                'url' => '/terms-and-conditions',
                'active' => \Yii::$app->controller->action->id === 'terms-and-conditions',
            ],
            [
                'label' => 'Privacy policy',
                'url' => '/privacy-policy',
                'active' => \Yii::$app->controller->action->id === 'privacy-policy',
            ],
        ],
    ],
    [
        'label' => 'Solutions',
        'url' => '/solutions',
        'items' => [
            [
                'label' => 'FULL-CYCLE DEVELOPMENT',
                'url' => '/solutions/full-cycle-development',
                'active' => \Yii::$app->controller->action->id === 'full-cycle-development',
            ],
            [
                'label' => 'WORDPRESS SOLUTIONS',
                'url' => '/solutions/wordpress-solutions',
                'active' => \Yii::$app->controller->action->id === 'wordpress-solutions',
            ],
            [
                'label' => 'MOBILE SOLUTIONS',
                'url' => '/solutions/mobile-solutions',
                'active' => \Yii::$app->controller->action->id === 'mobile-solutions',
            ],
            [
                'label' => 'HELP AND SUPPORT',
                'url' => '/solutions/help-and-support',
                'active' => \Yii::$app->controller->action->id === 'help-and-support',
            ],
        ],
        'active' => \Yii::$app->controller->id === 'solutions',
    ],
];
$topItems = [
    [
        'label' => 'portfolio',
        'url' => '/portfolio',
        'items' => [
            [
                'label' => 'Serhii\'s portfolio',
                'url' => '/portfolio/serhii',
                'active' => \Yii::$app->controller->action->id === 'serhii',
            ],
            [
                'label' => 'Mary\'s portfolio',
                'url' => '/portfolio/mary',
                'active' => \Yii::$app->controller->action->id === 'mary',
            ],
        ],
        'active' => \Yii::$app->controller->id === 'portfolio',
    ],
    [
        'label' => 'Contact us',
        'url' => '/contact',
        'options' => ['id' => 'contact_button'],
    ],
];

$this->registerMetaTag(Yii::$app->params['og_title'], 'og_title');
$this->registerMetaTag(Yii::$app->params['og_image'], 'og_image');
$this->registerMetaTag(Yii::$app->params['og_description'], 'og_description');

$this->registerMetaTag(Yii::$app->params['default_author'], 'default_author');
$this->registerMetaTag(Yii::$app->params['default_description'], 'default_description');
$this->registerMetaTag(Yii::$app->params['default_keywords'], 'default_keywords');

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KDGDVMX');</script>
    <!-- End Google Tag Manager -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="/favicon.png">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title);?></title>
    <!--    Open Graph protocol-->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?=Url::to('', 'https');?>">
    <meta property="og:site_name" content="FEDIRKO.PRO">
    <meta property="og:locale" content="en_US">
    <?php $this->head() ?>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KDGDVMX"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php $this->beginBody() ?>

<header>
    <div class="container">
        <a class="logo" href="<?=Yii::$app->homeUrl;?>"></a>
        <div class="mobile_menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <?php
        try {
            echo Nav::widget([
                'options' => ['class' => 'top_menu'],
                'items' => array_merge($mainItems, $topItems),
                'activateItems' => true,
                'activateParents' => true,
            ]);
        } catch (Exception $e) {
            //error here
        }
        ?>
    </div>
</header>

<main>
    <div class="alert_box">
        <?= Alert::widget() ?>
    </div>
    <?= $content ?>
</main>

<footer>
    <div class="container">
        <div class="row footer_list">
            <div class="col-md-6 col-sm-6">
                <div class="footer_title">Contacts</div>
                <div class="footer_phones">
                    <a href="tel:+380666272979">+3 8 066 627 29 79</a>
                    <br>
                    <a href="tel:+380660034001">+3 8 066 003 40 01</a>
                </div>
                <div><a href="mailto:contact&#64;fedirko&#46;pro">contact&#64;fedirko&#46;pro</a></div>
                <div class="footer_address">Ukraine, Kyiv</div>
<!--                <div><a href="#">Sitemap</a></div>-->
<!--                <div><a href="#">Web development blog</a></div>-->
            </div>
            <?php
            foreach ($mainItems as $columns) {
	            echo '<div class="col-md-3 col-sm-3">';
	            echo '<div class="footer_title"><a href="' . $columns['url']. '">' . $columns['label']. '</a></div>';
                foreach ($columns['items'] as $item) {
                    echo '<a href="' . $item['url']. '">' . $item['label'] . '</a><br>';
                }

                echo '</div>';
            }
            ?>
<!--            <div class="col-md-2">-->
<!--                <div class="footer_title">-->
<!--                    <a href="/interesting">See also</a>-->
<!--                </div>-->
<!--                <a href="#">One</a><br>-->
<!--                <a href="#">Two</a><br>-->
<!--                <a href="#">Three</a><br>-->
<!--            </div>-->
        </div>
    </div>
    <div class="container-fluid">
        <div class="row footer_copy">
            Copyright 2014 — <?= date('Y') ?> &copy; FEDIRKO.PRO. All rights reserved.
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
