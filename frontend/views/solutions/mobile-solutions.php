<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Mobile solutions | FEDIRKO.PRO';

Yii::$app->params['og_title']['content'] = $this->title;
Yii::$app->params['og_image']['content'] = Url::to('@web/images/bg/solutions/mobile_solutions.jpg', 'https');
Yii::$app->params['og_description']['content'] = 'Applications and custom mobile solutions for your business.';
Yii::$app->params['default_description']['content'] = 'Applications and custom mobile solutions for your business.';

$this->registerCss(".first { background: url('/images/bg/solutions/mobile_solutions.jpg') no-repeat center; background-size: cover;}");
?>
<section class="first">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Mobile solutions</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Let's be honest - today mobile phone is an integral part of our lives.</p>
                <p>We spend hours looking into screens in search of something useful or interesting. Same as your clients!</p>
                <p>If you have some online store or any other site, why not to offer to your clients native mobile application? It's useful and looks very professional.</p>
                <p>We can offer you creation of PWA (progressive web application) or native mobile applications for both iOS and Android to interact with your store or site.</p>
                <p>Also we can create backend (API) for your new application, or modify/improve exited.</p>
                <p>Most great sites have separate mobile application for their clients (or for own needs), so let's discuss your requirements and create your new app!</p>
            </div>
        </div>
    </div>
</section>


<?php
    echo $this->render('/site/_call_to_action');
?>