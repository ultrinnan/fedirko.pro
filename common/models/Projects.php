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
 * @property integer $engine
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $publish_date
 * @property integer $status
 * @property integer $favorite
 */
class Projects extends \yii\db\ActiveRecord
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
            [['by_serhii', 'by_mary', 'engine', 'created_at', 'updated_at', 'publish_date'], 'required'],
            [['by_serhii', 'by_mary', 'engine', 'created_at', 'updated_at', 'publish_date', 'status', 'favorite'], 'integer'],
            [['url'], 'string', 'max' => 255],
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
            'engine' => 'Engine',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'publish_date' => 'Publish Date',
            'status' => 'Status',
            'favorite' => 'Favorite',
        ];
    }
}
