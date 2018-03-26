<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Expertise controller
 */
class SolutionsController extends Controller
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
     * Displays index.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays index.
     *
     * @return mixed
     */
    //todo: move to dynamic posts
    public function actionFSysinfoPlugin()
    {
        return $this->render('f-sysinfo-plugin');
    }

    public function actionAdvancedWeb()
    {
        return $this->render('advanced-web');
    }
    public function actionMobileSolutions()
    {
        return $this->render('mobile-solutions');
    }
    public function actionHelpAndSupport()
    {
        return $this->render('help-and-support');
    }
    public function actionWordpressSolutions()
    {
        return $this->render('wordpress-solutions');
    }
    public function actionFullCycleDevelopment()
    {
        return $this->render('full-cycle-development');
    }
    public function actionCloud()
    {
        return $this->render('cloud');
    }

}
