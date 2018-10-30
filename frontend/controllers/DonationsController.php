<?php
namespace frontend\controllers;

use yii\web\Controller;

/**
 * Expertise controller
 */
class DonationsController extends Controller
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

    public function actionThankYou()
    {
        return $this->render('thank-you');
    }

}
