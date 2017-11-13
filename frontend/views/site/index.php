<?php

/* @var $this yii\web\View */

$this->title = 'FEDIRKO.PRO - full stack web development';

$this->registerCss(".first { background: url('/images/bg/space_bg.jpg') no-repeat center; background-size: cover;}");
?>
<section class="first main_page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>WE BUILD AMAZING WEB SOLUTIONS<br>FOR BUSINESS AND LIFE</h1>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>ADVANCED WEB & MOBILE SOLUTIONS<br>ENTERPRISE APPS & PORTALS</h2>
                <h3>Full-cycle servicing that covers every aspect of production and implementation of ideas</h3>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
<!--        todo: hover images-->
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="service web">
                    <div class="icon"></div>
                    <h4>ADVANCED WEB</h4>
                    <div class="desc">Productive, engaging and reliable web solutions for business outcomes you deserve.</div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="service mobile">
                    <div class="icon"></div>
                    <h4>MOBILE SOLUTIONS</h4>
                    <div class="desc">Mobile integrations and custom tools development for your business.</div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="service help">
                    <div class="icon"></div>
                    <h4>HELP AND SUPPORT</h4>
                    <div class="desc">Excellent solution for fast recovery or fix of your existing projects.</div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="service qa">
                    <div class="icon"></div>
                    <h4>QUALITY ASSURANCE</h4>
                    <div class="desc">Hands-on quality assurance expertise weaved into your development lifecycle.</div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="service full_stack clearfix">
                    <div class="icon"></div>
                    <h4>FULL-CYCLE DEVELOPMENT</h4>
                    <div class="desc">Full spectrum of development services spiced with flexible engagement models.</div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="service cloud">
                    <div class="icon"></div>
                    <h4>CLOUD</h4>
                    <div class="desc">Powerful cloud-based solutions fused with creative design for private, hybrid & public platforms.</div>
                </a>
            </div>
        </div>
    </div>
</section>

<!--todo: expertize magic-->
<!--<section style="background: green; min-height: 200px; color: white">-->
<!--    <div class="container">-->
<!--expertize magic-->
<!--    </div>-->
<!--</section>-->

<!--todo: here should be also boxes with favorite projects-->
<section class="favorite_works">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2><span class="green_header">MORE THAN 35<span title="some projects are hidden according to NDA" style="cursor: pointer;">*</span></span> COMPLETED PROJECTS</h2>
                <p>We deliver globally, providing result-driven project management and seamless communication.</p>
                <p>Our solutions yield benefit in Internet-facing, corporate and hybrid environments.</p>
            </div>
        </div>
<!--        <div class="row favorite_works_box">-->
<!--            <div class="favorite_work">1</div>-->
<!--            <div class="favorite_work">2</div>-->
<!--            <div class="favorite_work">3</div>-->
<!--        </div>-->
<!--        <div class="row favorite_works_box">-->
<!--            <div class="favorite_work">4</div>-->
<!--            <div class="favorite_work">5</div>-->
<!--            <div class="favorite_work">6</div>-->
<!--        </div>-->
        <a class="check_all" href="/portfolio">check all of our projects</a>
    </div>
</section>

<section class="feedback_slider">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active" style="background: url('/images/bg/feedback/feed_1.jpg') center; background-size: cover;">
                <div class="feedback_text">
                    "Throughout the scope of work undertaken on my behalf, Serhii has maintained an exemplary attitude of professionalism and flexibility on what has proven a challenging project. Additionally, he has offered personal input on possible improvements at no expense, it has been a pleasure working with Serhii."
                </div>
                <div class="feedback_author">
                    Matt Allan, <a href="#">BEVVS</a>
                </div>
            </div>

            <div class="item" style="background: url('/images/bg/feedback/feed_2.jpg') center; background-size: cover;">
                <div class="feedback_text">
                    "Throughout the scope of work undertaken on my behalf, Serhii has maintained an exemplary attitude of professionalism and flexibility on what has proven a challenging project. Additionally, he has offered personal input on possible improvements at no expense, it has been a pleasure working with Serhii."
                </div>
                <div class="feedback_author">
                    Matt Allan, <a href="#">BEVVS</a>
                </div>
            </div>

            <div class="item" style="background: url('/images/bg/feedback/feed_3.jpg') center; background-size: cover;">
                <div class="feedback_text">
                    "Throughout the scope of work undertaken on my behalf, Serhii has maintained an exemplary attitude of professionalism and flexibility on what has proven a challenging project. Additionally, he has offered personal input on possible improvements at no expense, it has been a pleasure working with Serhii."
                </div>
                <div class="feedback_author">
                    Matt Allan, <a href="#">BEVVS</a>
                </div>
            </div>

            <div class="item" style="background: url('/images/bg/feedback/feed_4.jpg') center; background-size: cover;">
                <div class="feedback_text">
                    "Throughout the scope of work undertaken on my behalf, Serhii has maintained an exemplary attitude of professionalism and flexibility on what has proven a challenging project. Additionally, he has offered personal input on possible improvements at no expense, it has been a pleasure working with Serhii."
                </div>
                <div class="feedback_author">
                    Matt Allan, <a href="#">BEVVS</a>
                </div>
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<?php
    echo $this->render('/site/_call_to_action');
?>