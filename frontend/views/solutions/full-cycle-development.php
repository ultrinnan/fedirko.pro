<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Full-cycle development';

$this->registerCss(".first { background: url('/images/bg/solutions/development.jpg') no-repeat center; background-size: cover;}")
?>
<section class="first">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Full-cycle development</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Very often people of business want to share their market to the Internet and decides to create website.</p>
                <p>In most cases it's unnecessary to spend their time for things like hostings, domains, DNS, SSL and other IT-staff. They just need the result - site (or landing, or promo page) should be created and available to their clients as soon as possible.</p>
                <p>In this case full-cycle web development is the best choice.</p>
                <p>We will create your site and do all needed preparations - domain registration, hosting setup, database connection etc.</p>
                <p>So, delegate all routine job to professionals and stay focused on your business. We will do the rest.</p>
            </div>
        </div>
    </div>
</section>

<?php
    echo $this->render('/site/_call_to_action');
?>