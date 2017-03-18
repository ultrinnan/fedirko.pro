<?php
namespace backend\controllers;

use common\models\ProjectsPictures;
use common\models\ProjectsTech;
use Yii;
use yii\web\Controller;
use common\models\Project;
use common\models\Techs;
use yii\web\NotFoundHttpException;

/**
 * Portfolio controller for backend
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
     * Displays projects list
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $projects_list = Project::getProjectsList();
        foreach ($projects_list as $item){
            $item['engine'] = $item['engine']['name'];
        }
        return $this->render('index',
            ['projects_list' => $projects_list,
        ]);
    }

    /**
     * View portfolio project and slider with selected number of favorite works, or show 404 no project
     */
    public function actionView($id)
    {
        $project_main = Project::getFullProject($id);
        if (!$project_main) throw new NotFoundHttpException('The requested project does not exist.');

        $projects_for_slider = Project::getSliderProjects($id, 5);

        return $this->render('view.php',
            ['project' => $project_main,
            'slider' => $projects_for_slider,
        ]);
    }

}
