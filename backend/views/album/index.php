<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AlbumSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Albums';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="album-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Album', ['/album/create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_album',
            'jdl_album',
            'album_seo',
			[
			
			'format' => 'html',
			'value' => function($data) { return Html::img('picture/album/'.$data->gbr_album, ['width'=>'100']); },
			],
            'aktif',

            ['class' => 'yii\grid\ActionColumn',
			'header'=>'Action',
			'template'=>'{view} {update} {delete}',
			'buttons' => [

            //view button
            'view' => function ($url, $model) {
                return Html::a('<span class="fa fa-search"></span>View', $url, [
                            'title' => Yii::t('app', 'View'),
                            'class'=>'btn btn-primary btn-xs',                                  
                ]);
            	},
        	],
			'urlCreator' => function ($action, $model, $key, $index) {
            if ($action === 'view') {
                $url =Yii::$app->urlManager->createUrl(['album/view', 'id' => $model->id_album]);
                return $url;
       		 }
			 elseif($action === 'update'){
			 	$url =Yii::$app->urlManager->createUrl(['album/update', 'id' => $model->id_album]);
                return $url;
			 }
			 else{
				 $url =Yii::$app->urlManager->createUrl(['album/delete', 'id' => $model->id_album]);
                return $url;
			 
			 }
			 }
			],
        ],
    ]); ?>

</div>
