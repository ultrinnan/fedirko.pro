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
    public function actionFSysinfoPlugin()
    {
        return $this->render('f-sysinfo-plugin');
    }

}
