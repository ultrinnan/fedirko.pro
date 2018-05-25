<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Style guide | FEDIRKO.PRO';

Yii::$app->params['og_title']['content'] = $this->title;
Yii::$app->params['og_image']['content'] = Url::to('@web/images/bg/style_bg.jpg', 'https');
Yii::$app->params['og_description']['content'] = 'A style guide (or manual of style) is a set of standards for the writing and design of documents, either for general use or for a specific publication, organization, or field.';
Yii::$app->params['default_description']['content'] = 'A style guide (or manual of style) is a set of standards for the writing and design of documents, either for general use or for a specific publication, organization, or field.';

$this->registerCss(".first { background: url('/images/bg/style_bg.jpg') no-repeat center; background-size: cover;}");
?>
<section class="first">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Style guide</h1>
            </div>
        </div>
    </div>
</section>

<section class="style_guide">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <blockquote cite="https://www.wikipedia.org/">
                    <p>A style guide (or manual of style) is a set of standards for the writing and design of documents, either for general use or for a specific publication, organization, or field. (It is often called a style sheet, though that term has other meanings.)</p>
                    <p>A style guide establishes and enforces style to improve communication. To do that, it ensures consistency within a document and across multiple documents and enforces best practice in usage and in language composition, visual composition, orthography and typography. For academic and technical documents, a guide may also enforce the best practice in ethics (such as authorship, research ethics, and disclosure), pedagogy (such as exposition and clarity), and compliance (technical and regulatory).</p>
                    <p>Style guides are common for general and specialized use, for the general reading and writing audience, and for students and scholars of various academic disciplines, medicine, journalism, the law, government, business, and specific industries.</p>
                    <div class="quote_source">Wikipedia</div>
                </blockquote>
            </div>
        </div>

        <div class="row">
            <h3>Colors</h3>
            <div class="col-md-6">
                <img class="color_example" src="<?=Url::to('/images/colors.png');?>">
            </div>
            <div class="col-md-6">
                <div>
                    <div class="color_box">
                        <div class="color" style="background: #39675a"></div>
                        <div class="color_code">
                            #39675a
                        </div>
                    </div>
                    <div class="color_box">
                        <div class="color" style="background: #84a580"></div>
                        <div class="color_code">
                            #84a580
                        </div>
                    </div>
                    <div class="color_box">
                        <div class="color" style="background: #b4c3a8"></div>
                        <div class="color_code">
                            #b4c3a8
                        </div>
                    </div>
                    <div class="color_box">
                        <div class="color" style="background: #e1e7d3"></div>
                        <div class="color_code">
                            #e1e7d3
                        </div>
                    </div>
                    <div class="color_box">
                        <div class="color" style="background: #4f3717"></div>
                        <div class="color_code">
                            #4f3717
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h3>Images and backgrounds</h3>
                <p>Full HD (1920 × 1080 progressive scan)</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h3>Buttons, inputs and controls</h3>
                <div class="center">
                    <a class="button white_button" href="#">Button</a>
                    <a class="button light_button" href="#">Button</a>
                    <a class="button dark_button" href="#">Button</a>
                    <a class="button red_button" href="#">Button</a>
                </div>
            </div>
        </div>
    </div>
</section>
