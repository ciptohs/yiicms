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
	$url =Yii::$app->urlManager->createUrl(['gallery/create', 'album' => $album->id_album]);
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

            'id_gallery',
            'nama_album',
            'jdl_gallery',
            'gallery_seo',
            'keterangan:ntext',
            // 'gbr_gallery',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
