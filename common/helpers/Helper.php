<?php

namespace common\helpers;

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

	static function createDirectory($path, $mode = 0775)
	{
		if (is_dir($path)) {
			return true;
		}
		try {
			$result = mkdir($path, $mode);
			chmod($path, $mode);
		} catch (\Exception $e) {
			throw new \yii\base\Exception("Failed to create directory '$path': " . $e->getMessage(), $e->getCode(), $e);
		}
		return $result;
	}

	static function createThumb($src, $dest, $desired_width) {

		/* read the source image */
		$source_image = imagecreatefromjpeg($src);
		$width = imagesx($source_image);
		$height = imagesy($source_image);

		/* find the "desired height" of this thumbnail, relative to the desired width  */
		$desired_height = floor($height * ($desired_width / $width));

		/* create a new, "virtual" image */
		$virtual_image = imagecreatetruecolor($desired_width, $desired_height);

		/* copy source image at a resized size */
		imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);

		/* create the physical thumbnail image to its destination */
		imagejpeg($virtual_image, $dest);
	}


}