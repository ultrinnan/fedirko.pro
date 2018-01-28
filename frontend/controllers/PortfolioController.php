<?php
namespace frontend\controllers;

use common\models\ProjectsTechs;
use Yii;
use yii\web\Controller;
use common\models\Projects;
use yii\web\NotFoundHttpException;

/**
 * Portfolio controller
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
        $projects = Projects::getProjectsList();

        return $this->render('index', [
            'projects' => $projects,
        ]);
    }

    /**
     * Displays Serhii's portfolio.
     *
     * @return mixed
     */
    public function actionSerhii()
    {
        $projects = Projects::getProjectsList(1);
        return $this->render('serhii', [
            'projects' => $projects,
        ]);
    }
    /**
     * Displays Mary's portfolio.
     *
     * @return mixed
     */
    public function actionMary()
    {
        $projects = Projects::getProjectsList(2);
        return $this->render('mary', [
            'projects' => $projects,
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
