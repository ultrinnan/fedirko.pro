<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'WP-Plugin sysinfo';
$this->params['breadcrumbs'][] = $this->title;

$this->registerCss(".first { background: url('/images/bg/solutions/wordpress.jpg') no-repeat center; background-size: cover;}");
?>
<section class="first">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>WP-Plugin sysinfo</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Shows important system information about server configuration as a nice Widget on WP dashboard.</p>
                <a target="_blank" href="https://github.com/ultrinnan/f-sysinfo">Check it on GitHub</a>
            </div>
        </div>
    </div>
</section>

<?php
    echo $this->render('/site/_call_to_action');
?>