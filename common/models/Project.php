<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property integer $id
 * @property integer $by_serhii
 * @property integer $by_mary
 * @property string $url
 * @property string $name
 * @property string $short_desc
 * @property string $long_desc
 * @property integer $engine
 * @property string $create_date
 * @property string $publish_date
 * @property integer $status
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['by_serhii', 'by_mary', 'engine', 'status'], 'integer'],
            [['long_desc'], 'string'],
            [['create_date'], 'required'],
            [['create_date', 'publish_date'], 'safe'],
            [['url', 'name', 'short_desc'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'by_serhii' => 'By Serhii',
            'by_mary' => 'By Mary',
            'url' => 'Url',
            'name' => 'Name',
            'short_desc' => 'Short Desc',
            'long_desc' => 'Long Desc',
            'engine' => 'Engine',
            'create_date' => 'Create Date',
            'publish_date' => 'Publish Date',
            'status' => 'Status',
        ];
    }

    public function getProject($id)
    {
        $project = $this::findOne($id);
        return $project;
    }
}
