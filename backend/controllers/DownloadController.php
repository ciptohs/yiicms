<?php

namespace backend\controllers;

use Yii;
use app\models\Download;
use app\models\DownloadSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\UploadForm;
use yii\helpers\Url;

/**
 * DownloadController implements the CRUD actions for Download model.
 */
class DownloadController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Download models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DownloadSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Download model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
		return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
        
    }
	 public function actionDownload($id)
    {
		$model=$this->findModel($id);
		$url =Url::to('@web/download/'.$model->nama_file);
		$this->downloadFile($url,$model->nama_file);
		return $this->redirect(['index']);
        
    }

    /**
     * Creates a new Download model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
     public function actionCreate()
    {
        $model = new Download();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			$model->nama_file = UploadedFile::getInstance($model, 'nama_file');
           if (UploadedFile::getInstance($model, 'nama_file')) {$model->nama_file->saveAs('download/' . $model->nama_file->baseName . '.' . $model->nama_file->extension);}
		   $model->save();
			
		return $this->redirect(['view', 'id' => $model->id_download]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Download model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
		$gambar_old=$model->nama_file;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			if (UploadedFile::getInstance($model, 'nama_file')){
				$model->nama_file= UploadedFile::getInstance($model, 'nama_file');            
            	$model->nama_file->saveAs('download/' . $model->nama_file->baseName . '.' . $model->nama_file->extension);
			}
			else{
			$model->nama_file=$gambar_old;
			}
			$model->save();
            return $this->redirect(['view', 'id' => $model->id_download]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Download model.
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
     * Finds the Download model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Download the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Download::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
	
	public function downloadFile ($url,$nama_file)
	{
		header("Location: ".$url);
	    header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.basename($nama_file));
		header('Cache-Control: must-revalidate');
		readfile("download/".$nama_file);
		exit;
	}
}
