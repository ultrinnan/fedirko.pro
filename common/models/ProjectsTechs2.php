<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "projects_tech".
 *
 * @property integer $project_id
 * @property integer $tech_id
 */
class ProjectsTechs2 extends \yii\db\ActiveRecord
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
            [['tech_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'project_id' => 'Project ID',
            'tech_id' => 'Tech ID',
        ];
    }

    public static function getProjectTechList($project_id)
    {
        return static::find()
            ->select('tech_id as id, name')
            ->leftJoin('techs', 'techs.id = projects_techs.tech_id')
            ->where('projects_techs.project_id = '. $project_id)
            ->asArray()
            ->all();
    }
}
