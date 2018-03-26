<?php

/* @var $this yii\web\View */

$this->title = 'About FEDIRKO.PRO';

$this->registerCss(".first { background: url('/images/bg/office-bg.jpg') no-repeat center; background-size: cover;}");
?>
<section class="first">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?=$this->title;?></h1>
                <h2>Meet our team of passionate professionals</h2>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>We started as small family team of freelance web developers, but soon we realized, that we can create more value to our clients if we will provide general consulting services.</p>
                <p>Today we not just create sites and services - we provide full cycle consulting on business improvement.</p>
                <p>Our technology stack is based mostly on web technologies and related areas, but we also familiar in mobile development, cloud solutions,  and SEO.</p>
                <p>We have wide network of partners in different professional areas, so any task can be fully estimated and solved.</p>
                <p>To solve any type of problem - is our passion.</p>
            </div>
        </div>

        <div class="row">
            <div class="team_flex">
                <div class="team_box">
                    <div class="img">
                        <img src="/frontend/web/images/serhii.jpg" alt="Serhii">
                    </div>
                    <div class="name">
                        Serhii Fedirko
                    </div>
                    <div class="position">
                        Full Stack Web Developer
                    </div>
                </div>
                <div class="team_box">
                    <div class="img">
                        <img src="/frontend/web/images/mary.jpg" alt="Mary">
                    </div>
                    <div class="name">
                        Mary Fedirko
                    </div>
                    <div class="position">
                        Frontend Web Developer
                    </div>
                </div>
                <div class="team_box">
                    <div class="img">
                        <img src="/frontend/web/images/vyacheslav.jpg" alt="Vyacheslav">
                    </div>
                    <div class="name">
                        Vyacheslav Chub
                    </div>
                    <div class="position">
                        Full Stack Web Developer
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div>
                <h3>
                    We are looking for talanted people to join our team!
                </h3>
            </div>

            <div class="team_flex">
                <div class="team_box">
                    <div class="img">
                        <img src="/frontend/web/images/avatars/default_user.svg" alt="">
                    </div>
                    <div class="name">
                        Maybe you?
                    </div>
                    <div class="position">
                        Mobile Developer
                    </div>
                </div>
                <div class="team_box">
                    <div class="img">
                        <img src="/frontend/web/images/avatars/default_user.svg" alt="">
                    </div>
                    <div class="name">
                        Maybe you?
                    </div>
                    <div class="position">
                        Web Designer
                    </div>
                </div>
                <div class="team_box">
                    <div class="img">
                        <img src="/frontend/web/images/avatars/default_user.svg" alt="">
                    </div>
                    <div class="name">
                        Maybe you?
                    </div>
                    <div class="position">
                        Sales Manager
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
echo $this->render('/site/_call_to_action');
?>