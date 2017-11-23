<?php

namespace common\models;

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
}
