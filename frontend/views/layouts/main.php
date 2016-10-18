<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<!--    <link rel="shortcut icon" href="--><?//=Yii::getAlias('@frontendUrl')?><!--/favicon.png">-->
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'FEDIRKO.PRO',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'professionals', 'url' => Yii::$app->homeUrl],
        ['label' => 'expertise', 'url' => ['/expertise']],
        ['label' => 'services', 'url' => ['/services']],
        ['label' => 'technologies', 'url' => ['/technologies']],
        ['label' => 'portfolio', 'url' => ['/portfolio']],
        ['label' => 'Contact us', 'url' => ['/contact']],
    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <header class="header header--small">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo"><a href="/" class="logo-link" style="background-image: url(/sites/all/themes/iflexion/images/common.logo@2x.png);" title="Iflexion">Iflexion <span style="background-image: url(/sites/all/themes/iflexion/images/common.logo@2x.png);"></span></a></div><nav class="navigation navigation_normal"><ul class="navigationList"><li class="first expanded navigationList-item"><a href="/about" class="navigationList-link">Company</a><ul class="navigationDropdown"><li class="first leaf navigationDropdown-item"><a href="/about" class="navigationDropdown-link">About</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/about/history" class="navigationDropdown-link">History</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/methodology" class="navigationDropdown-link">Methodology</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/business-continuity" class="navigationDropdown-link">Business Continuity</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/quality-management" class="navigationDropdown-link">Quality Management</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/security-ipprotection" class="navigationDropdown-link">Security and IP Protection</a></li>
                                    <li class="last leaf navigationDropdown-item"><a href="/engagement-models" class="navigationDropdown-link">Engagement Models</a></li>
                                </ul></li>
                            <li class="expanded active-trail navigationList-item--active navigationList-item"><a href="/expertise" class="active-trail navigationList-link active">Expertise</a><ul class="navigationDropdown"><li class="first leaf navigationDropdown-item"><a href="/web-enterprise-portal-development" class="navigationDropdown-link">Web and Enterprise Portals</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/content-document-management-systems" class="navigationDropdown-link">Content and Document Management</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/social-networking-software" class="navigationDropdown-link">Social Networking</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/ecommerce" class="navigationDropdown-link">Omnichannel Ecommerce</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/business-intelligence" class="navigationDropdown-link">Big Data &amp; Business Intelligence</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/media-content-distribution" class="navigationDropdown-link">Media Content Distribution</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/business-process-automation" class="navigationDropdown-link">Business Process Automation</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/elearning-online-training" class="navigationDropdown-link">Elearning and Online Training</a></li>
                                    <li class="last leaf navigationDropdown-item"><a href="/mobility" class="navigationDropdown-link">Mobility</a></li>
                                </ul></li>
                            <li class="expanded navigationList-item"><a href="/services" class="navigationList-link">Services</a><ul class="navigationDropdown"><li class="first leaf navigationDropdown-item"><a href="/services/requirements-engineering" class="navigationDropdown-link">Requirements Engineering</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/services/design-usability" class="navigationDropdown-link">Prototyping &amp; UXD</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/services/custom-software-development" class="navigationDropdown-link">Application Development</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/services/application-integration" class="navigationDropdown-link">Application Integration</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/application-security" class="navigationDropdown-link">Application Security</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/services/quality-assurance-testing" class="navigationDropdown-link">QA and Testing</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/services/maintenance-and-support" class="navigationDropdown-link">Maintenance and Support</a></li>
                                    <li class="last leaf navigationDropdown-item"><a href="/services/dedicated-development-centers" class="navigationDropdown-link">Dedicated Development Teams</a></li>
                                </ul></li>
                            <li class="expanded navigationList-item"><a href="/technologies" class="navigationList-link">Technologies</a><ul class="navigationDropdown"><li class="first leaf navigationDropdown-item"><a href="/dotnet-development" class="navigationDropdown-link">.NET</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/java-development" class="navigationDropdown-link">Java</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/ruby-on-rails-development" class="navigationDropdown-link">Ruby on Rails</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/php-development" class="navigationDropdown-link">PHP</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/python-development" class="navigationDropdown-link">Python</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/backend-development" class="navigationDropdown-link">Backend</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/frontend-development" class="navigationDropdown-link">Frontend</a></li>
                                    <li class="leaf navigationDropdown-item"><a href="/cloud-solutions" class="navigationDropdown-link">Cloud</a></li>
                                    <li class="last leaf navigationDropdown-item"><a href="/mobile-technologies" class="navigationDropdown-link">Mobile Platforms</a></li>
                                </ul></li>
                            <li class="leaf navigationList-item"><a href="/portfolio" class="navigationList-link">Portfolio</a></li>
                            <ul>
                                <li class="leaf navigationList-item"><a href="/sergey" class="navigationList-link">Sergey's portfolio</a></li>
                                <li class="leaf navigationList-item"><a href="/mary" class="navigationList-link">Mary's portfolio</a></li>
                            </ul>
                            <li class="last leaf navigationList-item--border navigationList-item"><a href="/contact" class="navigationList-link">Contact Us</a></li>
                        </ul><a href="#mobileNavigation" class="burger"><span class="burger-item burger-item--1"></span><span class="burger-item burger-item--2"></span><span class="burger-item burger-item--3"></span></a></nav>      </div>
            </div>
        </div>
    </header>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; FEDIRKO.PRO <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
