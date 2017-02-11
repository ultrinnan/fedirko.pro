<?php
use backend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <link rel="icon" type="image/png" href="/favicon.png">
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<main>
    <?= $content ?>
</main>

<footer>
    <div class="container">
        <p class="pull-left">&copy; FEDIRKO.PRO <?= date('Y') ?></p>

        <p class="pull-right copy">
            <a href="//fedirko.pro"><img src="//fedirko.pro/share/logo_small_bw.png" alt="FEDIRKO.PRO logo" title="created by FEDIRKO.PRO"></a>
        </p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
