<?php
use yii\helpers\Html;
?>
<div id="lang">
		<?php foreach ($langs as $lang){
		    if ($current->name == $lang->name){
		        echo Html::a($lang->name, '/'.$lang->url.Yii::$app->getRequest()->getLangUrl(), ['class' => 'lang_box active']);
		    } else {
			    echo Html::a($lang->name, '/'.$lang->url.Yii::$app->getRequest()->getLangUrl(), ['class' => 'lang_box']);
		    }
        }
        ?>
</div>