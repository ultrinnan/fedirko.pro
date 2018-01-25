<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "projects_techs".
 *
 * @property integer $id
 * @property integer $project_id
 * @property integer $tech_id
 */
class ProjectsTechs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects_techs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_id', 'tech_id'], 'required'],
            [['project_id', 'tech_id'], 'integer'],
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
            'tech_id' => 'Tech ID',
        ];
    }

    public static function removeProjectsTech($project_id, $tech_id)
    {
        $record = self::find()
            ->where('project_id = ' . $project_id)
            ->andWhere('tech_id = ' . $tech_id)
            ->one();
        return $record->delete();
    }
}
