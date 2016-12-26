<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
<section class="first main_page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Cool site for our family will be here soon...</h1>
                <p>Now you can visit our portfolio subdomains:</p>
                <ul>
                    <li><a href="http://sergey.fedirko.pro">sergey.fedirko.pro</a> </li>
                    <li><a href="http://mary.fedirko.pro">mary.fedirko.pro</a> </li>
                </ul>
                <p>come back here later, it will be interesting ;)</p>
            </div>
        </div>
    </div>
</section>
<section class="call_to_action">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>WANT TO START A PROJECT?</h2>
                It's simple.
                <a class="contact_button" href="site/contact">contact us</a>

            </div>
        </div>
    </div>
</section>