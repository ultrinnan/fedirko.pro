<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'How we work | FEDIRKO.PRO';

Yii::$app->params['og_title']['content'] = $this->title;
Yii::$app->params['og_image']['content'] = Url::to('@web/images/bg/contactus-bg.jpg', 'https');
Yii::$app->params['og_description']['content'] = 'Description of our general workflow with clients.';
Yii::$app->params['default_description']['content'] = 'Description of our general workflow with clients.';

$this->registerCss(".first { background: url('/images/bg/space_bg.jpg') no-repeat center; background-size: cover;}");
?>
<section class="first">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>How we work</h1>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>We work on both per-project or time-and-material basis, this means we can discuss some projects with fixed price, or do some jobs with hourly payments. Minimum time we charge is 15 min</p>
                <p>Clients receive 5% discounts for every $1k they paid (up to 15% total discount).</p>
                <p>Discounts can be increased or decreased depending on different conditions (see below).</p>
                <p>For every project we will create dedicated folder on google drive, where you will be able to store any information, mockups, images and tasks info.</p>
                <p>All projects are developed and tested on our test hosting. You will be able to check work on the special dedicated subdomain (like YOUR-SITE.FEDIRKO.PRO)</p>
                <p>All tasks are tracked in special dedicated document. Any new task should be placed in those file, we will discuss it and if it is confirmed we will mark it in green.</p>
                <p>After job is done and tested, you will pay for it, and files will be uploaded to your server.</p>
                <p>All clients receive free training or instructions on dedicated systems.</p>
                <p>Free support and bugfixing are available during 2 weeks after job's done.</p>
                <p>There is no need in prepayment from your side, until tasks are more than 40 hours in total. In this case prepayment is 30%.</p>
                <p>After $1k total payments clients became "trusted" and there is no need in prepayments at all.</p>
                <p>On all developed sites in footer will be small, almost transparent logo with link to our site with or without text. Every project will be in our portfolio later.</p>
                <p>If client needs NDA and don't want to have our logo/link, this increases price per 30%, and discards all discounts (per project).</p>
                <p>Clients can receive invoices and contracts on demand.</p>

                <h3>We know that every business is unique, so we are ready to discuss YOUR requirements and change our rules to feet your needs.</h3>
            </div>
        </div>
    </div>
</section>
<?php
    echo $this->render('/site/_call_to_action');
?>