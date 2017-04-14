<?php
use yii\helpers\Html;
use backend\models\Admin;
use backend\models\SiteConfig;


/* @var $this \yii\web\View */
/* @var $content string */

?>

<header class="main-header">
    <?php
    $admin = Admin::findIdentity(Yii::$app->user->id);
    ?>

    <?= Html::a('<span class="logo-mini"><i class="fa fa-user-secret"></i></span><span class="logo-lg"> ' . SiteConfig::option('site_name') . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= Yii::getAlias('@web') ?>/img/default_user.svg" class="user-image" alt="admin Image"/>
                        <span class="hidden-xs"><?=$admin->first_name;?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?= Yii::getAlias('@web');?>/img/default_user.svg" class="img-circle"
                                 alt="User Image"/>

                            <p>
<!--                                todo: add real admin credentials-->
                                <?=$admin->first_name . ' ' . $admin->last_name;?>
                                <small>Administrator</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <?=Html::a('Profile',
                                    ['admin/view?id=' . Yii::$app->user->id],
                                    ['class' => 'btn btn-default btn-flat']
                                )?>
                            </div>
                            <div class="pull-right">
                                <?=Html::a(
                                    'Sign out',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
