<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
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

<div class="content">
    <?php
    NavBar::begin([
        'brandLabel' => '<div id="logo"></div>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        [
            'label' => 'professionals',
            'url' => Yii::$app->homeUrl,
            'items' => [
                [
                    'label' => 'Sergey\'s CV',
                    'url' => '/cv-sergey',
                ],
                [
                    'label' => 'Mary\'s CV',
                    'url' => '/cv-mary',
                ],
                [
                    'label' => 'Methodology',
                    'url' => ['/methodology'],
                ],
                [
                    'label' => 'Business Continuity',
                    'url' => ['/business-continuity'],
                ],
                [
                    'label' => 'Quality Management',
                    'url' => ['/quality-management'],
                ],
                [
                    'label' => 'Security and IP Protection',
                    'url' => ['/security-ip-protection'],
                ],
                [
                    'label' => 'Engagement Models',
                    'url' => ['/engagement-models'],
                ],
            ]
        ],
        [
            'label' => 'expertise',
            'url' => ['/expertise/index'],
            'items' => [
                [
                    'label' => 'Web and Enterprise Portals',
                    'url' => '/web-enterprise-portal-development',
                ],
                [
                    'label' => 'Content and Document Management',
                    'url' => '/content-document-management-systems',
                ],
                [
                    'label' => 'Social Networking',
                    'url' => '/social-networking-software',
                ],
                [
                    'label' => 'Omnichannel Ecommerce',
                    'url' => '/ecommerce',
                ],
                [
                    'label' => 'Big Data &amp; Business Intelligence',
                    'url' => '/business-intelligence',
                ],
                [
                    'label' => 'Media Content Distribution',
                    'url' => '/media-content-distribution',
                ],
                [
                    'label' => 'Business Process Automation',
                    'url' => '/business-process-automation',
                ],
                [
                    'label' => 'Elearning and Online Training',
                    'url' => '/elearning-online-training',
                ],
                [
                    'label' => 'Mobility',
                    'url' => '/mobility',
                ],
            ]
        ],
        [
            'label' => 'services',
            'url' => ['/services/index'],
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
                [
                    'label' => 'Dedicated Development Teams',
                    'url' => '/services/dedicated-development-centers',
                ],
            ],
        ],
        [
            'label' => 'technologies',
            'url' => ['/technologies/index'],
            'items' => [
                [
                    'label' => 'PHP',
                    'url' => '/php-development',
                ],
                [
                    'label' => 'Python',
                    'url' => '/python-development',
                ],
                [
                    'label' => 'Backend',
                    'url' => '/backend-development',
                ],
                [
                    'label' => 'Frontend',
                    'url' => '/frontend-development',
                ],
                [
                    'label' => 'Cloud',
                    'url' => '/cloud-solutions',
                ],
                [
                    'label' => 'Mobile Platforms',
                    'url' => '/mobile-technologies',
                ],
            ],
        ],
        [
            'label' => 'portfolio',
            'url' => ['/portfolio/index'],
            'items' => [
                [
                    'label' => 'Sergey\'s portfolio',
                    'url' => ['/portfolio/sergey'],
                ],
                [
                    'label' => 'Mary\'s portfolio',
                    'url' => ['/portfolio/mary'],
                ],
            ],
        ],
        [
            'label' => 'Contact us',
            'url' => ['site/contact'],
            'options' => ['id' => 'contact_button'],
        ],
    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
        'activateItems' => true,
        'activateParents' => true,
    ]);

    NavBar::end();
    ?>
        <?= Alert::widget() ?>
        <?= $content ?>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; FEDIRKO.PRO <?= date('Y') ?></p>

        <p class="pull-right">
            <a href="//fedirko.pro"><img src="//fedirko.pro/share/logo_small_bw.png" alt="FEDIRKO.PRO logo" title="created by FEDIRKO.PRO"></a>
        </p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
