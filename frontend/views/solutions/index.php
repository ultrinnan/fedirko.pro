<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Solutions';

$this->registerCss(".first { background: url('/images/bg/solutions/solution.jpeg') no-repeat center; background-size: cover;}");
?>
<section class="first">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Solutions</h1>
                <h3>Every client is unique. We build solutions for all of them.</h3>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <a href="/solutions/f-sysinfo-plugin">WP-Plugin sysinfo</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    echo $this->render('/site/_call_to_action');
?>