<?php
namespace frontend\widgets;
use frontend\models\Lang;

class WLang extends \yii\bootstrap\Widget
{
	public function init(){}

	public function run() {
		return $this->render('lang/view', [
			'current' => Lang::getCurrent(),
			'langs' => Lang::find()->all(),
		]);
	}
}