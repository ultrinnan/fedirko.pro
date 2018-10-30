<?php

/* @var $this yii\web\View */
/* @var $projects \common\models\Donations */

use yii\helpers\Url;

$this->title = 'Donations | FEDIRKO.PRO';

Yii::$app->params['og_title']['content'] = $this->title;
Yii::$app->params['og_image']['content'] = Url::to('@web/images/bg/donate_bg.jpg', 'https');
Yii::$app->params['og_description']['content'] = 'Support development of free and open-source software! Donate to FEDIRKO.PRO.';
Yii::$app->params['default_description']['content'] = 'Support development of free and open-source software! Donate to FEDIRKO.PRO.';

$this->registerCss(".first { background: url('/images/bg/donate_bg.jpg') no-repeat center; background-size: cover;}");
?>
<section class="first">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Donations</h1>
                <h2>Support development of free and open&#8209;source software!</h2>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <h3>If you like some of our FOSS work, you can support us!</h3>
            <div class="col-md-12">
                <h4>Small donation will let us buy more coffee and write more awesome code :)</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <hr>
                <form method="POST" accept-charset="utf-8" action="https://www.liqpay.ua/api/3/checkout" style="text-align: center">
                    <input type="hidden" name="data" value="eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXlkb25hdGUiLCJwdWJsaWNfa2V5IjoiaTkxNjc0NjgyMDkiLCJhbW91bnQiOiI1IiwiY3VycmVuY3kiOiJVU0QiLCJkZXNjcmlwdGlvbiI6IkRvbmF0aW9uIiwidHlwZSI6ImRvbmF0ZSIsInJlc3VsdF91cmwiOiJodHRwczovL2ZlZGlya28ucHJvL2RvbmF0aW9ucy90aGFuay15b3UiLCJsYW5ndWFnZSI6ImVuIn0=" />
                    <input type="hidden" name="signature" value="YQua/3f5rVKkbHSBlXbZLeYQbZA=" />
                    <button style="border: none !important; display:inline-block !important;text-align: center !important;padding: 7px 20px !important;
		color: #fff !important; font-size:16px !important; font-weight: 600 !important; font-family:OpenSans, sans-serif; cursor: pointer !important; border-radius: 2px !important;
		background: rgb(122,183,43) !important;"onmouseover="this.style.opacity='0.5';" onmouseout="this.style.opacity='1';">
                        <img src="https://static.liqpay.ua/buttons/logo-small.png" name="btn_text"
                             style="margin-right: 7px !important; vertical-align: middle !important;"/>
                        <span style="vertical-align:middle; !important">Buy us some coffee (5 USD)</span>
                    </button>
                </form>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="liqpay_checkout"></div>
                <script>
                    window.LiqPayCheckoutCallback = function() {
                        LiqPayCheckout.init({
                            data:"eyAidmVyc2lvbiIgOiAzLCAicHVibGljX2tleSIgOiAieW91cl9wdWJsaWNfa2V5IiwgImFjdGlv" +
                                "biIgOiAicGF5IiwgImFtb3VudCIgOiAxLCAiY3VycmVuY3kiIDogIlVTRCIsICJkZXNjcmlwdGlv" +
                                "biIgOiAiZGVzY3JpcHRpb24gdGV4dCIsICJvcmRlcl9pZCIgOiAib3JkZXJfaWRfMSIgfQ==",
                            signature: "QvJD5u9Fg55PCx/Hdz6lzWtYwcI=",
                            embedTo: "#liqpay_checkout",
                            mode: "embed" // embed || popup,
                        }).on("liqpay.callback", function(data){
                            console.log(data.status);
                            console.log(data);
                        }).on("liqpay.ready", function(data){
                            // ready
                        }).on("liqpay.close", function(data){
                            // close
                        });
                    };
                </script>
                <script src="//static.liqpay.ua/libjs/checkout.js" async></script>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="payment_wrap mastercard">
                </div>
            </div>
            <div class="col-md-4">
                <div class="payment_wrap visa">
                </div>
            </div>
            <div class="col-md-4">
                <div class="payment_wrap privatbank">
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    echo $this->render('/site/_call_to_action');
?>