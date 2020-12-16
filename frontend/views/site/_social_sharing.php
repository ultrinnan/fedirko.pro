<?php
use yii\helpers\Url;
?>
<section class="social_sharing">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Like it? Share with friends:</h3>
                <div class="social_box">
                    <a href="#" rel="nofollow" id="facebook_btn" class="social facebook" title="Share on Facebook"></a>
                    
                    <a rel="nofollow" class="social linkedin" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?=urlencode(Url::to('', 'https'));?>&title=<?=urlencode(Yii::$app->params['og_title']['content']);?>&summary=<?=urlencode(Yii::$app->params['default_description']['content']);?>&source=<?=urlencode('FEDIRKO.PRO')?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=480,width=640');return false;" title="Share on LinkedIn"></a>

                    <a rel="nofollow" class="social twitter" target=_blank href="https://twitter.com/share?text=<?=urlencode(Yii::$app->params['og_title']['content']);?>&url=<?=Url::to('', 'https');?>&hashtags=FEDIRKO.PRO&related=FEDIRKO.PRO" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=480,width=640');return false;" title="Share on Twitter"></a>

                    <a rel="nofollow" class="social google" target="_blank" href="https://plus.google.com/share?url=<?=urlencode(Url::to('', 'https'));?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=480,width=640');return false;" title="Share on Google+"></a>
                </div>

                <div class="related_left">↩
                    <h3>TransRadar</h3>↩
                    <p>Efficient and free cargo search for trucks.</p>↩
                    <p>Works on <strong>WordPress</strong></p>↩
                    <p>Technologies:</p>
                    <div class="related_tech">PHP</div><div class="related_tech">HTML5</div><div class="related_tech">CSS3</div><div class="related_tech">JavaScript</div><div class="related_tech">jQuery</div><div class="related_tech">Bootstrap</div><div class="related_tech">AJAX</div><div class="related_tech">API</div>
                </div>↩

                <script>
                    (function(d, s, id){
                        let js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) {return;}
                        js = d.createElement(s); js.id = id;
                        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=193822971282350";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));

                    document.getElementById('facebook_btn').onclick = function() {
                        FB.ui({
                            method: 'share',
                            href: "<?=Url::to('', 'https');?>",
                        }, function(response){});
                    }
                </script>

            </div>
        </div>
    </div>
</section>