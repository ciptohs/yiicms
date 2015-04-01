<?php

namespace backend\controllers;

use Yii;
use app\models\Artikel;
use app\models\ArtikelSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\UploadForm;

/**
 * ArtikelController implements the CRUD actions for Artikel model.
 */
class ArtikelController extends Controller
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
     * Lists all Artikel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArtikelSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Artikel model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Artikel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Artikel();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
           	$model->gambar = UploadedFile::getInstance($model, 'gambar');
			$model->username=Yii::$app->user->identity->username;
			$model->tanggal=date("Y-m-d");
			$model->jam=date("H:i:s");
			$model->save();
			if (UploadedFile::getInstance($model, 'gambar')){             
            	$model->gambar->saveAs('picture/artikel/' . $model->gambar->baseName . '.' . $model->gambar->extension);
			}
			return $this->redirect(['view', 'id' => $model->id_berita]);
			
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Artikel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
		$gambar_old=$model->gambar;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
		
			if (UploadedFile::getInstance($model, 'gambar')){
				$model->gambar = UploadedFile::getInstance($model, 'gambar');            
            	$model->gambar->saveAs('gambar/' . $model->gambar->baseName . '.' . $model->gambar->extension);
			}
			else{
			$model->gambar=$gambar_old;
			}
			$model->save();
			return $this->redirect(['view', 'id' => $model->id_berita]);
                 
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Artikel model.
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
     * Finds the Artikel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Artikel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Artikel::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
