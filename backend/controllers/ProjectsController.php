<?php

namespace backend\controllers;

use common\helpers\Helper;
use common\models\ProjectsImages;
use common\models\ProjectsLangs;
use common\models\ProjectsTechs;
use Yii;
use common\models\Projects;
use common\models\ProjectsSearch;
use yii\base\Exception;
use yii\db\StaleObjectException;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use frontend\models\Lang;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

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

	    for ($i = 0; $i<count($langs); $i++){
		    $page[$i] = new ProjectsLangs();
		    $page[$i]['lang_id'] = $langs[$i]['id'];
	    }
	    if ($model->load(Yii::$app->request->post())) {
//	        var_dump(Yii::$app->request->post());
//            $files = UploadedFile::getInstancesByName('img');
//            var_dump($files);
//	        die;
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
//	    var_dump($techs);
//	    die;
	    $langs = Lang::find()->asArray()->all();
//        var_dump($langs);
        $page = [];
        for ($i = 0; $i < count($langs); $i++){
//            $page[$i] = new ProjectsLangs();
            $page[$i] = ProjectsLangs::find()
//                ->select('*')
                ->where('project_id = ' . $id)
                ->andWhere('lang_id = ' . ($i + 1))
//	                 ->leftJoin('pages_lang', 'pages_lang.page_id = pages.id')
                ->asArray()
                ->one();
//            $page[$i]['lang_id'] = $langs[$i]['id'];
        }


	    if ($model->load(Yii::$app->request->post())) {
//	        var_dump(Yii::$app->request->post());
//	        die;
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
//				    $language->project_id = $model->id;
				    $language->save();
			    }

			    $files = UploadedFile::getInstanceByName('img');
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
    public function actionDelete($id)
    {
	    try {
		    $this->findModel( $id )->delete();
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

//	public function actionImageUpload()
//	{
//		$model = new ProjectsImages();
//
//		$imageFile = UploadedFile::getInstance($model, 'img');
//
//		$directory = Yii::getAlias('@frontend/web/images/projects') . '/' . $model->project_id . '/';
//		if (!is_dir($directory)) {
//			try {
//				FileHelper::createDirectory( $directory );
//			} catch ( Exception $e ) {
//				var_dump($e);
//			}
//		}
//
//		if ($imageFile) {
//			$uid = uniqid(time(), true);
//			$fileName = $uid . '.' . $imageFile->extension;
//			$filePath = $directory . $fileName;
//			if ($imageFile->saveAs($filePath)) {
//				$path = '/images/projects/' . $model->project_id . '/' . $fileName;
//				return Json::encode([
//					'files' => [
//						[
//							'name' => $fileName,
//							'size' => $imageFile->size,
//							'url' => $path,
//							'thumbnailUrl' => $path,
//							'deleteUrl' => 'image-delete?name=' . $fileName,
//							'deleteType' => 'POST',
//						],
//					],
//				]);
//			}
//		}
//
//		return '{error}';
//	}

	public function actionImageDelete()
	{
	    var_dump($_REQUEST);
	    die;
		$directory = Yii::getAlias('@frontend/web/img/temp') . DIRECTORY_SEPARATOR . Yii::$app->session->id;
		if (is_file($directory . DIRECTORY_SEPARATOR . $name)) {
			unlink($directory . DIRECTORY_SEPARATOR . $name);
		}

		$files = FileHelper::findFiles($directory);
		$output = [];
		foreach ($files as $file) {
			$fileName = basename($file);
			$path = '/img/temp/' . Yii::$app->session->id . DIRECTORY_SEPARATOR . $fileName;
			$output['files'][] = [
				'name' => $fileName,
				'size' => filesize($file),
				'url' => $path,
				'thumbnailUrl' => $path,
				'deleteUrl' => 'image-delete?name=' . $fileName,
				'deleteType' => 'POST',
			];
		}
		return Json::encode($output);
	}
}
