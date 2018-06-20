<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use frontend\models\Lang;

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
            [['by_serhii', 'by_mary', 'engine', 'publish_date', 'status'], 'required'],
            [['by_serhii', 'by_mary', 'engine', 'created_at', 'updated_at', 'status', 'favorite'], 'integer'],
	        ['publish_date', 'date', 'timestampAttribute' => 'publish_date'],
            [['url'], 'string', 'max' => 255],
            [['url'], 'url'],
	        ['url', 'default', 'value' => null],
        ];
    }

	public function behaviors()
	{
		return [
			TimestampBehavior::className(),
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
            'status' => 'Visible',
            'favorite' => 'Favorite',
        ];
    }

    //get default translation (for admin)
	public static function getProjectTranslation($id)
	{
		$trans = ProjectsLangs::find()
			->where('project_id = ' . $id)
			->andWhere('lang_id = 1')
			->one();
		return $trans;
	}

    /**
     * @param null int $author
     * @return bool|array|ActiveRecord[]
     */
	public static function getProjectInfo($author = null, $id = null)
    {
        $lang = Lang::getCurrent();

        if (isset($author)){
            $where = $author == 1 ? 'by_serhii = 1' : 'by_mary = 1';
        } else {
            $where = '1';
        }
        $where_id = $id ? 'projects.id = ' . $id : '1';

        $projects = static::find()
            ->select('*')
            ->leftJoin('projects_langs pl', 'pl.project_id = projects.id')
            ->where($where)
            ->andWhere('pl.lang_id = ' . $lang->id)
            ->andWhere($where_id)
            ->andWhere('projects.status = 1')
            ->orderBy(['projects.publish_date' => SORT_DESC])
            ->asArray()
            ->all();
        if ($projects){
            return $projects;
        } else {
            return false;
        }
    }

	public static function getProjectTechs($id)
	{
		$techs = ProjectsTechs::find()
		             ->select('tech_id as id, name')
		             ->leftJoin('techs', 'techs.id = projects_techs.tech_id')
		             ->where('projects_techs.project_id = '. $id)
		             ->asArray()
		             ->all();
		return $techs;
	}

    //get default image with thumb
	public static function getProjectImage($id)
	{
		$img = ProjectsImages::find()
			->where('project_id = ' . $id)
			->andWhere('main = 1')
			->one();
		return $img;
	}

	public static function getAllImages($id)
	{
		$imgs = ProjectsImages::find()
			->where('project_id = ' . $id)
			->orderBy('main DESC')
			->all();
		return $imgs;
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProjectsLangs()
	{
		return $this->hasMany(ProjectsLangs::className(), ['project_id' => 'id']);
	}

    /**
     * @param null $author
     * @return array|bool|ActiveRecord[]
     */
	public static function getProjectsList($author = null)
	{
		$projects = static::getProjectInfo($author);
		if (!$projects) return false;

		foreach ($projects as &$project) {
			$project['engine'] = Engines::getEngine($project['engine']);
			$project['tech_list'] = ProjectsTechs::getProjectTechList($project['project_id']);
			$project['pictures'] = ProjectsImages::getProjectPictures($project['project_id']);
		}

		return $projects;
	}

	public static function getSliderProjects($id, $lim = null)
	{
        $lang = Lang::getCurrent();

		$projects = static::find()
            ->select('*')
            ->leftJoin('projects_langs pl', 'pl.project_id = projects.id')
            ->where('projects.favorite = 1')
            ->andWhere('projects.id != ' . $id)
            ->andWhere('pl.lang_id = ' . $lang->id)
            ->andWhere('projects.status = 1')
            ->orderBy('RAND()')
            ->limit($lim)
            ->asArray()
            ->all();
		if (!$projects) return false;

		foreach ($projects as &$project) {
			$project['engine'] = Engines::getEngine($project['engine']);
			$project['tech_list'] = ProjectsTechs::getProjectTechList($project['project_id']);
			$project['pictures'] = ProjectsImages::getProjectPictures($project['project_id']);
		}

		return $projects;
	}

	public static function getFullProject($id)
	{
        $project = static::getProjectInfo(null, $id);
        if (!$project) return false;

        $project = $project[0];
		$project['engine'] = Engines::getEngine($project['engine']);
		$project['tech_list'] = ProjectsTechs::getProjectTechList($project['project_id']);
		$project['pictures'] = ProjectsImages::getProjectPictures($project['project_id']);

		return $project;
	}

    /**
     * number of projects in portfolio for adds purposes and main page
     * @return int
     */
	public static function getCount()
    {
        $projects_count = self::find()->all();
        return count($projects_count);
    }


}
