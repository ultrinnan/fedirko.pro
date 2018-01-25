<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "projects_langs".
 *
 * @property integer $id
 * @property integer $project_id
 * @property integer $lang_id
 * @property string $name
 * @property string $short_desc
 * @property string $long_desc
 */
class ProjectsLangs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects_langs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['project_id', 'lang_id', 'name', 'short_desc', 'long_desc'], 'required'],
            [['project_id', 'lang_id'], 'integer'],
            [['name', 'short_desc'], 'string', 'max' => 255],
            ['long_desc', 'string', 'max' => 2048],
	        [['name', 'short_desc', 'long_desc'], 'default', 'value' => ''],
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
            'lang_id' => 'Lang ID',
            'name' => 'Project name',
            'short_desc' => 'Short description',
            'long_desc' => 'Long description',
        ];
    }

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProject()
	{
		return $this->hasOne(Projects::className(), ['id' => 'project_id']);
	}
}
