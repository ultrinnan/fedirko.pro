<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Expertise controller
 */
class ExpertiseController extends Controller
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
     * Displays PoC.
     *
     * @return mixed
     */
    public function actionProofOfConcept()
    {
        return $this->render('proof-of-concept');
    }

}
