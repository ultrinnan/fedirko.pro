<?php

namespace common\models\helpers;

trait Helper {

	/**
	 * @param $model
	 *
	 * @return string
	 */
	public static function showErrors($model)
	{
		$error_msg = '';
		foreach ($model->getErrors() as $key => $value){
			$error_msg .= '<b>' . $key . '</b>: ' . $value[0] . '<br>';
		}
		return $error_msg;
	}


}