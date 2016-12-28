<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "projects_pictures".
 *
 * @property integer $project_id
 * @property integer $main
 * @property string $url
 */
class ProjectsPictures extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects_pictures';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_id'], 'required'],
            [['project_id', 'main'], 'integer'],
            [['url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'project_id' => 'Project ID',
            'main' => 'Main',
            'url' => 'Url',
        ];
    }

    public static function getProjectPictures($project_id)
    {
        $pictures = static::find()
            ->select('id, main, url')
            ->where('project_id = '. $project_id)
            ->asArray()
            ->all();
        return $pictures;
    }
}
