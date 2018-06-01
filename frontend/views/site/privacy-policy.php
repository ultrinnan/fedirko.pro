<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Privacy policy | FEDIRKO.PRO';

Yii::$app->params['og_title']['content'] = $this->title;
Yii::$app->params['og_image']['content'] = Url::to('@web/images/bg/space_bg.jpg', 'https');
Yii::$app->params['og_description']['content'] = 'Privacy policy for FEDIRKO.PRO.';
Yii::$app->params['default_description']['content'] = 'Privacy policy for FEDIRKO.PRO.';

$this->registerCss(".first { background: url('/images/bg/space_bg.jpg') no-repeat center; background-size: cover;}");
?>
<section class="first main_page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Privacy policy</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Who we are</h2>
                <p>We are small team of professional developers. We provide variety of web services to our clients.</p>
                <p>Our website address is: https://fedirko.pro.</p>

                <h2>What personal data we collect and why we collect it</h2>
                <h3>Comments</h3>
                <p>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor’s IP address and browser user agent string to help spam detection.</p>

                <p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p>

                <h3>Media</h3>
                <p>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p>

                <h3>Contact forms</h3>
                <p>If you will send messages using "Contact us" form, we will keep your contact details to be able to respond and possible to send you commercial proposals. You will be able to request your data deletion.</p>
                <h3>Cookies</h3>
                <p>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p>

                <p>If you have an account and you log in to this site, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p>

                <p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select "Remember Me", your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p>

                <p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p>

                <h3>Embedded content from other websites</h3>
                <p>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p>

                <p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracing your interaction with the embedded content if you have an account and are logged in to that website.</p>

                <h3>Analytics</h3>
                <p>We use Google analytics tools to understand our audience and their needs.</p>

                <h2>Who we share your data with</h2>
                <p>We do not share your data with any third party service or company.</p>

                <h2>How long we retain your data</h2>

                <p>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p>

                <p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p>

                <h2>What rights you have over your data</h2>
                <p>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p>

                <h2>Where we send your data</h2>
                <p>Visitor comments may be checked through an automated spam detection service.</p>

                <h2>How we protect your data</h2>
                <p>All our services are stored on modern servers with latest software.</p>
                <p>We use strong encryption for all sensitive data (such as passwords), and manage access to everything very seriously.</p>
            </div>
        </div>
    </div>
</section>

<?php
    echo $this->render('/site/_call_to_action');
?>