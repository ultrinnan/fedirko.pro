<?php

namespace common\models;

use Yii;
use common\models\ProjectsPictures;
use common\models\ProjectsTech;
use common\models\Techs;

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

        $project['engine'] = Techs::getTech($project['engine']);
        $project['tech_list'] = ProjectsTech::getProjectTechList($project['id']);

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
            $project['engine'] = Techs::getTech($project['engine']);
            $project['tech_list'] = ProjectsTech::getProjectTechList($project['id']);

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

    public static function getProjectsList()
    {
        $projects = static::find()
            ->orderBy(['create_date' => SORT_DESC])
            ->asArray()
            ->all();
        if (!$projects) return false;

//        foreach ($projects as &$project) {
//            $project['engine'] = Techs::getTech($project['engine']);
//            $project['tech_list'] = ProjectsTech::getProjectTechList($project['id']);
//
//            $project['pictures_all'] = ProjectsPictures::getProjectPictures($project['id']);
//            foreach ($project['pictures_all'] as $item){
//                if ($item['main'] == 1){
//                    $project['pictures']['main'] = $item;
//                } else {
//                    $project['pictures']['all'][] = $item;
//                }
//            }
//            unset($project['pictures_all']);
//        }

        return $projects;

    }

}
