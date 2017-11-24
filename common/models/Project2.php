<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use common\models\ProjectsPictures;
use common\models\ProjectsTechs;
use common\models\Techs2;

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
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $status
 * @property integer $favorite
 */
class Project2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

	public function behaviors()
	{
		return [
			'timestamp' => [
				'class' => 'yii\behaviors\TimestampBehavior',
				'attributes' => [
					ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
					ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
				],
			],
		];
	}

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['by_serhii', 'by_mary', 'engine', 'status', 'favorite'], 'integer'],
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
	        'created_at' => 'Created at',
	        'updated_at' => 'Updated at',
            'publish_date' => 'Publish Date',
            'status' => 'Status',
	        'favorite' => 'Favorite'
        ];
    }

    /**
     * return completed array for selected project
     * @param $id
     * @return array|bool
     */
    public static function getFullProject($id)
    {
        $project = static::find()
            ->where('id = ' . $id)
            ->asArray()
            ->one();
        if (!$project) return false;

        $project['engine'] = Techs2::getTech($project['engine']);
        $project['tech_list'] = ProjectsTechs::getProjectTechList($project['id']);

        $project['pictures_all'] = ProjectsPictures::getProjectPictures($project['id']);
        foreach ($project['pictures_all'] as $item){
            if ($item['main'] == 1){
                $project['pictures']['main'] = $item;
            } else {
                $project['pictures']['all'][] = $item;
            }
        }
        unset($project['pictures_all']);

        return $project;
    }

    /**
     * get prepared array for slider with selected number of favorite works
     * @param $id
     * @param null $lim
     * @return array|bool|\yii\db\ActiveRecord[]
     */
    public static function getSliderProjects($id, $lim = null)
    {
        $projects = static::find()
            ->where('favorite = 1')
            ->andWhere('id != ' . $id)
            ->orderBy('RAND()')
            ->limit($lim)
            ->asArray()
            ->all();
        if (!$projects) return false;

        foreach ($projects as &$project) {
            $project['engine'] = Techs2::getTech($project['engine']);
            $project['tech_list'] = ProjectsTechs::getProjectTechList($project['id']);

            $project['pictures_all'] = ProjectsPictures::getProjectPictures($project['id']);
            foreach ($project['pictures_all'] as $item){
                if ($item['main'] == 1){
                    $project['pictures']['main'] = $item;
                } else {
                    $project['pictures']['all'][] = $item;
                }
            }
            unset($project['pictures_all']);
        }

        return $projects;
    }

    public static function getProjectsList($author = null)
    {
        if (isset($author)){
            $where = $author == 1 ? 'by_serhii = 1' : 'by_mary = 1';
        } else {
            $where = '1';
        }
        $projects = static::find()
            ->where($where)
            ->orderBy(['publish_date' => SORT_DESC])
            ->asArray()
            ->all();
        if (!$projects) return false;

        foreach ($projects as &$project) {
            $project['engine'] = Techs2::getTech($project['engine']);
            $project['tech_list'] = ProjectsTechs::getProjectTechList($project['id']);

            $project['pictures_all'] = ProjectsPictures::getProjectPictures($project['id']);
            foreach ($project['pictures_all'] as $item){
                if ($item['main'] == 1){
                    $project['pictures']['main'] = $item;
                } else {
                    $project['pictures']['all'][] = $item;
                }
            }
            unset($project['pictures_all']);
        }

        return $projects;

    }

}
