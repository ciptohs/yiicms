<?php

namespace backend\controllers;

use Yii;
use app\models\Gallery;
use app\models\GallerySearch;
use app\models\Album;
use app\models\AlbumSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\UploadForm;
/**
 * GalleryController implements the CRUD actions for Gallery model.
 */
class GalleryController extends Controller
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
     * Lists all Gallery models.
     * @return mixed
     */
	 /*
    public function actionIndex()
    {
        $searchModel = new GallerySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
*/
	public function actionIndex()
    {
        $searchModel = new GallerySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays a single Gallery model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
         return $this->render('view_picture', [
            'model' => $this->findModel($id),
        ]);
    }
 	public function actionAlbum($id)
    {
        $searchModel = new GallerySearch();
		$searchModel->id_album=$id;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('view', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'album'=>$this->findAlbum($id),
        ]);
    }
    /**
     * Creates a new Gallery model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
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
		    return $this->redirect(['view', 'id' => $model->id_gallery]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
	public function actionUpload()
    {
        $model = new Gallery();
	        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->gbr_gallery = UploadedFile::getInstance($model, 'gbr_gallery');
           if (UploadedFile::getInstance($model,'gbr_gallery')) 
		   {
		   	$model->gbr_gallery->saveAs('picture/gallery/' . $model->gbr_gallery->baseName . '.' . $model->gbr_gallery->extension);
			}
		   $model->save();
		    return $this->redirect(['view', 'id' => $model->id_gallery]);
        } else {
            return $this->render('upload', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Gallery model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
		$image_old=$model->gbr_gallery;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->gbr_gallery = UploadedFile::getInstance($model, 'gbr_gallery');
           if (UploadedFile::getInstance($model,'gbr_gallery')) 
		   {
		   	$model->gbr_gallery->saveAs('picture/gallery/' . $model->gbr_gallery->baseName . '.' . $model->gbr_gallery->extension);
			}
		   $model->save();
		    return $this->redirect(['view', 'id' => $id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
	public function actionChange($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->gbr_gallery = UploadedFile::getInstance($model, 'gbr_gallery');
           if (UploadedFile::getInstance($model,'gbr_gallery')) 
		   {
		   	$model->gbr_gallery->saveAs('picture/gallery/' . $model->gbr_gallery->baseName . '.' . $model->gbr_gallery->extension);
			}
		   $model->save();
		    return $this->redirect(['view', 'id' => $id]);
        } else {
            return $this->render('update_upload', [
                'model' => $model,
            ]);
        }
    }
    /**
     * Deletes an existing Gallery model.
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
     * Finds the Gallery model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Gallery the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Gallery::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
	protected function findAlbum($id)
    {
        if (($model = Album::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
	protected function findPicture($id)
    {	
	
		$model = Gallery::find()
			->where(['id_album' =>$id])
			->all();
        if ($model !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('halaman tidak ditemukan.');
        }
    }
}
