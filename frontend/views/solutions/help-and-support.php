<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Help and Support';

$this->registerCss(".first { background: url('/images/bg/solutions/help_support.jpg') no-repeat center; background-size: cover;}");
?>
<section class="first">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Help and Support</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Very often people, who want to save money, ordered website (or any other service) on freelance services like Upwork or similar.</p>
                <p>This is a good decision, because there is a lot of good professionals. But good professionals worth more money, and often it's cheaper to hire someone with low prices (and maybe low quality). And as result your project may not work as you expected or you need to change something but those freelancer are not available any more.</p>
                <p>This is common issue.</p>
                <p>That's why we can offer you help and support for your existed projects.</p>
                <p>What we can offer:</p>
                <ul>
                    <li>100% warranty for our services</li>
                    <li>Storing your projects on our technical platform (cloud, hosting etc.)</li>
                    <li>100% response during working day (depends on time zone)</li>
                    <li>Full cycle of project maintenance (backups, updates, etc.)</li>
                    <li>Cleanup of your sites after virus attacks</li>
                    <li>Restoration of your services after hacking attacks</li>
                    <li>SEO and security audit</li>
                    <li>Any other support you may need.</li>
                </ul>
                <p>We can help you with any trouble your site may be in. Just ask.</p>
            </div>
        </div>
    </div>
</section>

<?php
    echo $this->render('/site/_call_to_action');
?>