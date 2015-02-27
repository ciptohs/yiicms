<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\GallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Galleries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php 
	$url =Yii::$app->urlManager->createUrl(['gallery/create', 'id' => $album->id_album]);
	// echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Foto', $url, ['class' => 'btn btn-success']) ?>
    </p>
<?= $album->id_album ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_gallery',
            'id_album',
            'jdl_gallery',
            'gallery_seo',
            'keterangan:ntext',
            // 'gbr_gallery',

             ['class' => 'yii\grid\ActionColumn',
			'header'=>'Action',
			'template'=>'{view} {update} {delete}',
			'urlCreator' => function ($action, $model, $key, $index) {
            if ($action === 'view') {
                $url =Yii::$app->urlManager->createUrl(['gallery/view', 'id' => $model->id_gallery]);
                return $url;
       		 }
			 elseif($action === 'update'){
			 	$url =Yii::$app->urlManager->createUrl(['gallery/update', 'id' => $model->id_gallery]);
                return $url;
			 }
			 else{
				 $url =Yii::$app->urlManager->createUrl(['gallery/delete', 'id' => $model->id_gallery]);
                return $url;
			 
			 }
			 }
			],
        ],
    ]); ?>

</div>
