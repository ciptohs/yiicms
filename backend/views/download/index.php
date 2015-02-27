<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DownloadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Downloads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="download-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Download', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_download',
            'judul',
            'nama_file',
            'tgl_posting',
            'hits',
['class' => 'yii\grid\ActionColumn',
			'header'=>'Action',
			'template'=>'{download} {view} {update} {delete}',
			'buttons' => [

            //view button
            'download' => function ($url, $model) {
                return Html::a('<span class="fa fa-search"></span>Download', $url, [
                            'title' => Yii::t('app', 'Download File'),
                            'class'=>'btn btn-primary btn-xs',                                  
                ]);
            	},
        	],
			'urlCreator' => function ($action, $model, $key, $index) {
            if ($action === 'download') {
                $url =Yii::$app->urlManager->createUrl(['download/download', 'id' => $model->id_download]);
                return $url;
       		 }
				elseif($action === 'view'){
			 	$url =Yii::$app->urlManager->createUrl(['download/view', 'id' => $model->id_download]);
                return $url;
			 }
			 elseif($action === 'update'){
			 	$url =Yii::$app->urlManager->createUrl(['download/update', 'id' => $model->id_download]);
                return $url;
			 }
			 else{
				 $url =Yii::$app->urlManager->createUrl(['download/delete', 'id' => $model->id_download]);
                return $url;
			 
			 }
			 }
			],
        ],
    ]); ?>

</div>
