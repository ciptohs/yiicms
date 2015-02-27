<?php

namespace backend\controllers;

use Yii;
use app\models\Album;
use app\models\AlbumSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\UploadForm;
/**
 * AlbumController implements the CRUD actions for Album model.
 */
class AlbumController extends Controller
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
     * Lists all Album models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AlbumSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Album model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $searchModel = new GallerySearch();
		$searchModel->id_album=$id;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('view', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'album'=>$this->findModel($id),
        ]);
    }

    /**
     * Creates a new Album model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Album();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			$model->gbr_album = UploadedFile::getInstance($model, 'gbr_album');
           if (UploadedFile::getInstance($model, 'gbr_album')) {$model->gbr_album->saveAs('picture/album/' . $model->gbr_album->baseName . '.' . $model->gbr_album->extension);}
		   $model->save();
			
		return $this->redirect(['view', 'id' => $model->id_album]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
/*
 public function actionAddpicture($id)
    {
       $model = new Gallery();
		$model->id_album=$id;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->gbr_gallery = UploadedFile::getInstance($model, 'gbr_gallery');
           if (UploadedFile::getInstance($model,'gbr_gallery')) 
		   {
		   	$model->gbr_gallery->saveAs('picture/gallery/' . $model->gbr_gallery->baseName . '.' . $model->gbr_gallery->extension);
			}
		   $model->save();
		    return $this->redirect(['view', 'id' => $id]);
        } else {
            return $this->render('create_picture', [
                'model' => $model,
            ]);
        }
    }
*/
    /**
     * Updates an existing Album model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
		$gambar_old=$model->gbr_album;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			if (UploadedFile::getInstance($model, 'gbr_album')){
				$model->gbr_album = UploadedFile::getInstance($model, 'gbr_album');            
            	$model->gbr_album->saveAs('picture/album/' . $model->gbr_album->baseName . '.' . $model->gbr_album->extension);
			}
			else{
			$model->gbr_album=$gambar_old;
			}
			$model->save();
            return $this->redirect(['view', 'id' => $model->id_album]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Album model.
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
     * Finds the Album model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Album the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Album::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
