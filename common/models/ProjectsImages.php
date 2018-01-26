<?php

namespace common\models;

use common\helpers\Helper;
use Yii;

/**
 * This is the model class for table "projects_images".
 *
 * @property integer $id
 * @property integer $project_id
 * @property string $img
 * @property string $thumb
 * @property integer $main
 */
class ProjectsImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_id'], 'required'],
            [['project_id', 'main'], 'integer'],
            [['img', 'thumb'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_id' => 'Project ID',
            'img' => 'Img',
            'thumb' => 'Thumb',
            'main' => 'Main',
        ];
    }

	/**
	 * @param $files object|array UploadFile
	 * @param $project_id
	 *
	 * @return bool
	 * @throws \yii\base\Exception
	 */
	public function upload($files, $project_id)
	{
		if ($files && $project_id) {
			$error = true;

            //should we assign new main flag?
            $has_main = self::find()
                ->where('project_id = ' . $project_id)
                ->andWhere('main = 1')
                ->one();

			for ($i = 0; $i < count($files); $i++){
				$obj = new self();
				$obj->project_id = $project_id;

				$obj->main = ($i == 0 && !$has_main) ? 1 : 0;

				$rand_filename = Yii::$app->security->generateRandomString();
				$obj->img = $rand_filename . '.' . $files[$i]->extension;
				$obj->thumb = $rand_filename .'_m.' . $files[$i]->extension;

				$path = Yii::getAlias('@project') . '/' . $project_id . '/';
				Helper::createDirectory($path);
				$files[$i]->saveAs($path . $obj->img);
				Helper::createThumb($path . $obj->img, $path . $obj->thumb, 400);

				if ($obj->save()){
					$error = false;
				}
				else {
					Yii::$app->session->setFlash('error', 'There was an error.<hr>' . Helper::showErrors($obj));
					return false;
				}
			}
			if (!$error) return true;
		}
		return false;
	}

}
