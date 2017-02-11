<?php

/* @var $this yii\web\View */

$this->title = 'Portfolio';
?>
<section class="first portfolio_main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>OUR PORTFOLIO</h1>
<!--                todo: implement filters-->
<!--                <h3>you can sort projects by selecting filters</h3>-->
            </div>
        </div>
    </div>
</section>

<?php
    echo $this->render('_portfolio_list', ['projects' => $projects]);

    echo $this->render('/site/_call_to_action');
?>