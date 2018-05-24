<?php

namespace backend\controllers;

use common\helpers\Helper;
use common\models\ProjectsImages;
use common\models\ProjectsLangs;
use common\models\ProjectsTechs;
use Yii;
use common\models\Projects;
use common\models\ProjectsSearch;
use yii\db\StaleObjectException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use frontend\models\Lang;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

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
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
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
	    $images = Projects::getAllImages($id);
	    return $this->render('view', [
		    'page' => $project,
		    'images' => $images,
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
    	$images = [];
        $images_config = [];
    	$techs = [];
	    $model = new Projects();
	    $langs = Lang::find()->asArray()->all();
	    $page = [];

        $lang_count = count($langs);
        for ($i = 0; $i < $lang_count; $i++){
		    $page[$i] = new ProjectsLangs();
		    $page[$i]['lang_id'] = $langs[$i]['id'];
	    }
	    if ($model->load(Yii::$app->request->post())) {
	    	if ($model->save()){

			    $tech_list = Yii::$app->request->post('tech_ids');
			    foreach ($tech_list as $tech_id){
				    $tech = new ProjectsTechs();
				    $tech->tech_id = $tech_id;
				    $tech->project_id = $model->id;
				    $tech->save();
			    }

			    foreach (Yii::$app->request->post('lang') as $lang){
				    $language = new ProjectsLangs();
				    $language->attributes = $lang;
				    $language->project_id = $model->id;
                    if (!$language->save()){
                        Yii::$app->session->setFlash('error', 'There was an error.<hr>' . Helper::showErrors($language));
                    }
			    }

			    $files = UploadedFile::getInstancesByName('img');
			    if ($files){
		            $imgs = new ProjectsImages();
		            $imgs->upload($files, $model->id);
			    }

			    Yii::$app->session->setFlash('success', 'New project was created.');
			    return $this->redirect(['view', 'id' => $model->id]);
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
			    'images' => $images,
                'images_config' => $images_config,
                'techs' => $techs
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

	    $images = ProjectsImages::find()->select('img')->where('project_id = ' . $id)->asArray()->all();
        $images_config = [];
	    foreach ($images as &$image){
            $images_config[] = [
                'url' => "image-delete?name=" . $image['img'],
                'key' => $id,
            ];
            $image = '/images/projects/' . $id . '/' . $image['img'];
        }

	    $techs = ProjectsTechs::find()->select('tech_id')->where('project_id = ' . $id)->asArray()->all();
        foreach ($techs as &$tech){
            $tech = $tech['tech_id'];
        }
	    $langs = Lang::find()->asArray()->all();
        $page = [];
        $lang_count = count($langs);
        for ($i = 0; $i < $lang_count; $i++){
            $page[$i] = ProjectsLangs::find()
                ->where('project_id = ' . $id)
                ->andWhere('lang_id = ' . ($i + 1))
                ->asArray()
                ->one();
        }


	    if ($model->load(Yii::$app->request->post())) {
		    if ($model->save()){

                $tech_list = Yii::$app->request->post('tech_ids');
                //check old techs first and remove if not in new list
                foreach ($techs as $old_tech){
                    if (!in_array($old_tech, $tech_list)){
                        ProjectsTechs::removeProjectsTech($model->id, $old_tech);
                    }
                }
                //now check if exists and add new techs
                foreach ($tech_list as $tech_id){
                    $existed = ProjectsTechs::find()
                        ->where('project_id = ' . $model->id)
                        ->andWhere('tech_id = ' . $tech_id)
                        ->one();
                    if ($existed){
                        continue;
                    } else {
                        $tech = new ProjectsTechs();
                        $tech->tech_id = $tech_id;
                        $tech->project_id = $model->id;
                        $tech->save();
                    }
                }

			    foreach (Yii::$app->request->post('lang') as $lang){
				    $language = ProjectsLangs::find()
                        ->where('project_id = ' . $id)
                        ->andWhere('lang_id = ' . $lang['lang_id'])
                        ->one();
				    $language->attributes = $lang;
				    $language->save();
			    }

			    $files = UploadedFile::getInstancesByName('img');
			    if ($files){
				    $imgs = new ProjectsImages();
				    $imgs->upload($files, $model->id);
			    }

			    Yii::$app->session->setFlash('success', 'New project was created.');
			    return $this->redirect(['view', 'id' => $model->id]);
		    } else {
			    Yii::$app->session->setFlash('error', 'There was an error creating project.<hr>' . Helper::showErrors($model));
			    return $this->render('create', [
				    'page' => $page,
				    'model' => $model,
			    ]);
		    }
	    } else {
		    return $this->render('update', [
			    'page' => $page,
			    'model' => $model,
			    'images' => $images,
			    'images_config' => $images_config,
			    'techs' => $techs
		    ]);
	    }
    }

    /**
     * Deletes an existing Projects model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    //todo: make relations in database
    public function actionDelete($id)
    {
	    try {
		    $this->findModel( $id )->delete();

		    $langs = ProjectsLangs::find()->where('project_id = ' . $id)->all();
		    foreach ($langs as $lang){
		        $lang->delete();
            }

            $techs = ProjectsTechs::find()->where('project_id = ' . $id)->all();
		    foreach ($techs as $tech){
		        $tech->delete();
            }

            $images = ProjectsImages::find()->where('project_id = ' . $id)->all();
		    foreach ($images as $image){
		        $image->delete();
            }
            $path = Yii::getAlias('@project') . '/' . $id;
		    if (dir($path)){
                Helper::deleteDir($path);
            }

	    } catch ( StaleObjectException $e ) {
	    } catch ( NotFoundHttpException $e ) {
	    } catch ( \Exception $e ) {
	    } catch ( \Throwable $e ) {
	    	var_dump($e);
	    }

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
        }
        throw new NotFoundHttpException('The requested page does not exist.');
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

    /**
     * @param $key - project_id
     * @param $name string image name
     * @return bool
     */
	public function actionImageDelete()
	{
	    $key = $_REQUEST['key'];
	    $name = $_REQUEST['name'];

	    $image = ProjectsImages::find()
            ->where('project_id = ' . $key)
            ->andWhere('img = "' . $name . '"')
            ->one();
	    $is_main = $image->main ? true : false;

	    $img = $image->img;
	    $thumb = $image->thumb;

	    if ($image->delete()){
            $path = Yii::getAlias('@project') . '/' . $key . '/';

            if (is_file($path . $img)) {
                unlink($path . $img);
                unlink($path . $thumb);
            }

            //mark next image as main
            if ($is_main){
                $new_main = ProjectsImages::find()
                    ->where('project_id = ' . $key)
                    ->one();
                if ($new_main){
                    $new_main->main = 1;
                    $new_main->save();
                }
            }

            return true;
        }
        return false;
	}
}
