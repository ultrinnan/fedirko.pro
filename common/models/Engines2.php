<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "techs".
 *
 * @property integer $id
 * @property string $name
 */
class Engines2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'engines';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    public static function getEngine($id)
    {
        $engine = self::findOne($id);
        return $engine;

    }


}
