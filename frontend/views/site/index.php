<?php
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $projects_count yii\web\View */

$this->title = 'FEDIRKO.PRO - Full Stack Web Development and Solutions';

//meta modifiers example
//Yii::$app->params['og_title']['content'] = $this->title;
//Yii::$app->params['og_image']['content'] = Url::to('@web/images/bg/office-bg.jpg', 'https');
//Yii::$app->params['og_description']['content'] = 'Meet our team of passionate professionals';
//Yii::$app->params['default_description']['content'] = 'Meet our team of passionate professionals';

$this->registerCss(".first { background: url('/images/bg/space_bg.jpg') no-repeat center; background-size: cover;}");
?>
<section class="first">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>OUTSTANDING WEB SOLUTIONS<br>FOR YOUR BUSINESS</h1>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>ADVANCED WEB & MOBILE SOLUTIONS,<br>ENTERPRISE APPS & PORTALS</h2>
                <h3>Full-cycle servicing that covers every aspect of production and implementation of ideas</h3>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <a href="/solutions/full-cycle-development" class="service full_stack clearfix">
                    <span class="icon"></span>
                    <h4>FULL-CYCLE DEVELOPMENT</h4>
                    <span class="desc">Full range of development services with flexible engagement models.</span>
                </a>
            </div>
            <div class="col-md-6 col-sm-6">
                <a href="/solutions/wordpress-solutions" class="service wp">
                    <span class="icon"></span>
                    <h4>WORDPRESS SOLUTIONS</h4>
                    <span class="desc">Professional tools and solutions for any site on most popular CMS.</span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <a href="/solutions/mobile-solutions" class="service mobile">
                    <span class="icon"></span>
                    <h4>MOBILE SOLUTIONS</h4>
                    <span class="desc">Mobile integrations and tools development for any business.</span>
                </a>
            </div>
            <div class="col-md-6 col-sm-6">
                <a href="/solutions/help-and-support" class="service help">
                    <span class="icon"></span>
                    <h4>HELP AND SUPPORT</h4>
                    <span class="desc">Solution for fast recovery or fix of your existing projects.</span>
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
                <h2><span class="green_header">MORE THAN <?=$projects_count;?><span title="some projects are hidden according to NDA" style="cursor: pointer;">*</span></span> COMPLETED PROJECTS</h2>
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
    <div class="slider">
        <div class="feedback feed_1">
            <div class="slider_box">
                <div class="feedback_text">
                    "Throughout the scope of work undertaken on my behalf, Serhii has maintained an exemplary attitude of professionalism and flexibility on what has proven a challenging project. Additionally, he has offered personal input on possible improvements at no expense, it has been a pleasure working with Serhii."
                </div>
                <div class="feedback_author">
                    Matt Allan, BEVVS
                </div>
            </div>
        </div>
        <div class="feedback feed_2">
            <div class="slider_box">
                <div class="feedback_text">
                    "Заказывал у Сергея админ часть сайта (фронтенд и бэкенд). Все сделано в соответствии с техническим заданием и четко в строк. От себя могу добавить: приятный и адекватный разработчик,  в случае необходимости, может чего-то посоветовать в направлении юзабильности продукта. Уже посоветовал своим друзьям."
                </div>
                <div class="feedback_author">
                    Владимир Лобода
                </div>
            </div>
        </div>
        <div class="feedback feed_3">
            <div class="slider_box">
                <div class="feedback_text">
                    "We have worked together on 2 website projects from concept to reality. Serhii provided innovation and professionalism throughout the projects. Serhii developed the projects on time and within budget, which highlights to delivery. Serhii has helped turn the 2 project ideas into operating businesses. I continue to use Serhii who provides a cost effective service for support."
                </div>
                <div class="feedback_author">
                    Martin Burke, ValveRecruitment
                </div>
            </div>
        </div>
        <div class="feedback feed_4">
            <div class="slider_box">
                <div class="feedback_text">
                    "Заказывал доработку/правки сайта после индийских "профессионалов". Не самые дешевые рейты, но качество работы более чем соответствует. Новый проект запустили вовремя, а благодаря оперативной поддержке и постоянным советам по улучшению, готовый сайт получился даже луче, чем планировали."
                </div>
                <div class="feedback_author">
                    Дмитрий
                </div>
            </div>
        </div>
    </div>
    <div class="prev prev_feedback"></div>
    <div class="next next_feedback"></div>
</section>

<?php
    echo $this->render('/site/_call_to_action');
?>