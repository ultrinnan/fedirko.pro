<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\WLang;

AppAsset::register($this);

$mainItems = [
    [
        'label' => 'professionals',
        'url' => Yii::$app->homeUrl,
        'items' => [
            [
                'label' => 'About',
                'url' => '/about'
            ],
            [
                'label' => 'How we work',
                'url' => '/how-we-work'
            ],
            [
                'label' => 'Proof of Concept',
                'url' => '/proof-of-concept',
            ],
            [
                'label' => 'Terms and conditions',
                'url' => '/terms-and-conditions'
            ],
//            [
//                'label' => 'Serhii\'s CV',
//                'url' => '/cv-sergey',
//            ],
//            [
//                'label' => 'Mary\'s CV',
//                'url' => '/cv-mary',
//            ],
        ]
    ],
    [
        'label' => 'Solutions',
        'url' => '/solutions',
        'items' => [
            [
                'label' => 'FULL-CYCLE DEVELOPMENT',
                'url' => '/solutions/full-cycle-development',
            ],
            [
                'label' => 'WORDPRESS SOLUTIONS',
//            [
//                'label' => 'CLOUD',
//                'url' => '/solutions/cloud',
//            ],
//            ],
//                'url' => '/solutions/advanced-web',
//                'label' => 'ADVANCED WEB',
//            [
                'url' => '/solutions/wordpress-solutions',
            ],
            [
                'label' => 'MOBILE SOLUTIONS',
                'url' => '/solutions/mobile-solutions',
            ],
            [
                'label' => 'HELP AND SUPPORT',
                'url' => '/solutions/help-and-support',
            ],
        ],
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
            ],
            [
                'label' => 'Mary\'s portfolio',
                'url' => '/portfolio/mary',
            ],
        ],
    ],
    [
        'label' => 'Contact us',
        'url' => '/contact',
        'options' => ['id' => 'contact_button'],
    ],
];
//var_dump($mainItems);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <link rel="icon" type="image/png" href="/favicon.png">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="<?=Yii::$app->homeUrl;?>">
                    <div class="logo"></div>
                </a>
            </div>
            <div class="col-md-9">
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
        </div>
    </div>
</header>

<content>
<!--    todo: uncomment after multilang will be ready on backend-->
	<?//= WLang::widget();?>

    <div class="alert_box">
        <?= Alert::widget() ?>
    </div>
    <?= $content ?>
</content>

<footer>
    <div class="container">
        <div class="row footer_list">
            <div class="col-md-6">
                <a href="<?=Yii::$app->homeUrl?>"><div class="logo"></div></a>
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
	            echo '<div class="col-md-3">';
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
