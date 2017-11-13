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
                'label' => 'Serhii\'s CV',
                'url' => '/cv-sergey',
            ],
            [
                'label' => 'Mary\'s CV',
                'url' => '/cv-mary',
            ],
//            [
//                'label' => 'Methodology',
//                'url' => '/methodology',
//            ],
//            [
//                'label' => 'Business Continuity',
//                'url' => '/business-continuity',
//            ],
//            [
//                'label' => 'Quality Management',
//                'url' => '/quality-management',
//            ],
//            [
//                'label' => 'Security and IP Protection',
//                'url' => '/security-ip-protection',
//            ],
//            [
//                'label' => 'Engagement Models',
//                'url' => '/engagement-models',
//            ],
        ]
    ],
    [
        'label' => 'expertise',
        'url' => '/expertise/index',
        'items' => [
            [
                'label' => 'Proof of Concept',
                'url' => '/expertise/proof-of-concept',
            ],
//            [
//                'label' => 'Web and Enterprise Portals',
//                'url' => '/web-enterprise-portal-development',
//            ],
//            [
//                'label' => 'Content Management',
//                'url' => '/content-management-systems',
//            ],
//            [
//                'label' => 'Social Networking',
//                'url' => '/social-networking-software',
//            ],
//            [
//                'label' => 'Omnichannel Ecommerce',
//                'url' => '/ecommerce',
//            ],
//            [
//                'label' => 'Business Intelligence',
//                'url' => '/business-intelligence',
//            ],
//            [
//                'label' => 'Business Process Automation',
//                'url' => '/business-process-automation',
//            ],
//            [
//                'label' => 'E-learning and Training',
//                'url' => '/elearning-training',
//            ],
//            [
//                'label' => 'Mobility',
//                'url' => '/mobility',
//            ],
        ]
    ],
    [
        'label' => 'services',
        'url' => '/services/index',
        'items' => [
            [
                'label' => 'Requirements Engineering',
                'url' => '/services/requirements-engineering',
            ],
            [
                'label' => 'Prototyping &amp; UXD',
                'url' => '/services/design-usability',
            ],
            [
                'label' => 'Application Development',
                'url' => '/services/custom-software-development',
            ],
            [
                'label' => 'Application Integration',
                'url' => '/services/application-integration',
            ],
            [
                'label' => 'Application Security',
                'url' => '/application-security',
            ],
            [
                'label' => 'QA and Testing',
                'url' => '/services/quality-assurance-testing',
            ],
            [
                'label' => 'Maintenance and Support',
                'url' => '/services/maintenance-and-support',
            ],
        ],
    ],
//    [
//        'label' => 'technologies',
//        'url' => '/technologies/index',
//        'items' => [
//            [
//                'label' => 'PHP',
//                'url' => '/php-development',
//            ],
//            [
//                'label' => 'Python',
//                'url' => '/python-development',
//            ],
//            [
//                'label' => 'Backend',
//                'url' => '/backend-development',
//            ],
//            [
//                'label' => 'Frontend',
//                'url' => '/frontend-development',
//            ],
//            [
//                'label' => 'Cloud',
//                'url' => '/cloud-solutions',
//            ],
//            [
//                'label' => 'Mobile Platforms',
//                'url' => '/mobile-technologies',
//            ],
//        ],
//    ],
];
$topItems = [
    [
        'label' => 'portfolio',
        'url' => '/portfolio/index',
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
                echo Nav::widget([
                    'options' => ['class' => 'top_menu'],
                    'items' => array_merge($mainItems, $topItems),
                    'activateItems' => true,
                    'activateParents' => true,
                ]);
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
            <div class="col-md-4">
                <a href="<?=Yii::$app->homeUrl?>"><div class="logo"></div></a>
                <div class="footer_phones">
                    <a href="tel:+380668803111">+3 8 066 880 3 111</a>
                    <br>
                    <a href="tel:+380660034001">+3 8 066 003 40 01</a>
                </div>
                <div><a href="mailto:contact&#64;fedirko&#46;pro">contact&#64;fedirko&#46;pro</a></div>
                <div class="footer_address">Ukraine, Kyiv</div>
                <div><a href="#">Sitemap</a></div>
                <div><a href="#">Web development blog</a></div>
            </div>
            <?php
            foreach ($mainItems as $columns) {
	            echo '<div class="col-md-2">';
	            echo '<div class="footer_title"><a href="' . $columns['url']. '">' . $columns['label']. '</a></div>';
                foreach ($columns['items'] as $item) {
                    echo '<a href="' . $item['url']. '">' . $item['label'] . '</a><br>';
                }

                echo '</div>';
            }
            ?>
            <div class="col-md-2">
                <div class="footer_title">
                    <a href="/interesting">See also</a>
                </div>
                <a href="#">One</a><br>
                <a href="#">Two</a><br>
                <a href="#">Three</a><br>
            </div>
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
