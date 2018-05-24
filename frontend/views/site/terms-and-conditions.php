<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Terms and conditions | FEDIRKO.PRO';

Yii::$app->params['og_title']['content'] = $this->title;
Yii::$app->params['og_image']['content'] = Url::to('@web/images/bg/contactus-bg.jpg', 'https');
Yii::$app->params['og_description']['content'] = 'Terms and conditions for FEDIRKO.PRO.';
Yii::$app->params['default_description']['content'] = 'Terms and conditions for FEDIRKO.PRO.';

$this->registerCss(".first { background: url('/images/bg/space_bg.jpg') no-repeat center; background-size: cover;}");
?>
<section class="first main_page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Terms and conditions</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>
                    General
                </h2>
                <p>FEDIRKO.PRO - IT consulting group, that can provide various scope of services in web development, mobile prototyping, cloud solutions and many other IT areas.</p>
                <h2>
                    Personal data
                </h2>
                <p>On 25 May 2018, the current privacy laws in Europe are replaced by a new EU regulation, the General Data Protection Regulation (GDPR).</p>
                <p>A Regulation is a legal act and will be implemented in detail throughout the EU, and in Norway through the EEA Agreement. At the moment we are located in Ukraine, and since we are looking forward to be part of EU we also implementing GDPR.</p>
                <p>Similar rules are implementing for USA and other countries.</p>
                <p>All personal data (including e-mail, name, country, financial information, cookies, computer fingerprint etc.) are protected and stored safely.</p>
                <p>Any personal data can be removed from our database after individual's request.</p>
                <p>Your privacy is very important for us!</p>
            </div>
        </div>
    </div>
</section>

<?php
    echo $this->render('/site/_call_to_action');
?>