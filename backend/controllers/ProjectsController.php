<?php

namespace backend\controllers;

use common\models\helpers\Helper;
use common\models\ProjectsLangs;
use Yii;
use common\models\Projects;
use common\models\ProjectsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use frontend\models\Lang;

/**
 * ProjectsController implements the CRUD actions for Projects model.
 */
class ProjectsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Projects models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProjectsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Projects model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
	    $project = Projects::find()
	                 ->select('*')
	                 ->where('projects.id = ' . $id)
	                 ->leftJoin('projects_langs', 'projects_langs.project_id = projects.id')
	                 ->asArray()
	                 ->all();
	    return $this->render('view', [
		    'page' => $project,
		    'model' => $this->findModel($id),
	    ]);
    }

    /**
     * Creates a new Projects model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
	    $model = new Projects();
	    $langs = Lang::find()->asArray()->all();
	    $page = [];

	    for ($i = 0; $i<count($langs); $i++){
		    $page[$i] = new ProjectsLangs();
		    $page[$i]->lang_id = $langs[$i]['id'];
	    }
	    if ($model->load(Yii::$app->request->post())) {
	    	if ($model->save()){
			    //projects_lang create
			    foreach (Yii::$app->request->post('lang') as $lang){
				    $language = new ProjectsLangs();
				    $language->attributes = $lang;
				    $language->project_id = $model->id;
				    $language->save();
			    }
			    Yii::$app->session->setFlash('success', 'New project was created.');
			    return $this->redirect(['index']);
		    } else {
			    Yii::$app->session->setFlash('error', 'There was an error creating project.<hr>' . Helper::showErrors($model));
			    return $this->render('create', [
				    'page' => $page,
				    'model' => $model,
			    ]);
		    }
	    } else {
		    return $this->render('create', [
			    'page' => $page,
			    'model' => $model,
		    ]);
	    }
    }

    /**
     * Updates an existing Projects model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Projects model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Projects model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Projects the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Projects::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

	public function actionAddToFavorites(){
		if (Yii::$app->request->isAjax) {
			Yii::$app->response->format = Response::FORMAT_JSON;
			$id = (int)Yii::$app->request->post('id');
			$project = Projects::findOne($id);
			$project->favorite = $project->favorite ? false : true;
			if ($project->save(false)){
				return true;
			}
		}
		return false;
	}

	public function actionChangeVisibility(){
		if (Yii::$app->request->isAjax) {
			Yii::$app->response->format = Response::FORMAT_JSON;
			$id = (int)Yii::$app->request->post('id');
			$project = Projects::findOne($id);
			$project->status = $project->status ? false : true;
			if ($project->save(false)){
				return true;
			}
		}
		return false;
	}
}
