<?php
namespace frontend\controllers;

use common\models\ProjectsPictures;
use common\models\ProjectsTech;
use Yii;
use yii\web\Controller;
use common\models\Project;
use common\models\Techs;
use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
class PortfolioController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays common portfolio.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays Sergey's portfolio.
     *
     * @return mixed
     */
    public function actionSergey()
    {
        return $this->render('sergey');
    }
    /**
     * Displays Mary's portfolio.
     *
     * @return mixed
     */
    public function actionMary()
    {
        return $this->render('mary');
    }

    /**
     * View portfolio project or redirect to portfolio
     */
    public function actionView($id)
    {
        $project = Project::find()
            ->where(['id' => $id])
            ->asArray()
            ->one();
        if (!$project) throw new NotFoundHttpException('The requested project does not exist.');

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

        $projects_for_slider = 'fff';


        return $this->render('view.php',
            ['project' => $project,
            'slider' => $projects_for_slider,
        ]);
    }

}
