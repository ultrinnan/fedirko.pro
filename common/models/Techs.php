<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "techs".
 *
 * @property integer $id
 * @property string $name
 */
class Techs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'techs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
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

	public static function getTech($id)
	{
		$tech = self::findOne($id);
		return $tech;
	}
}
