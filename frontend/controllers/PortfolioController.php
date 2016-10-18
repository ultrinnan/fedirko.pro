<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

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

}
