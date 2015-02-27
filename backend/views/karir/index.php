<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KarirSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Karirs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="karir-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Karir', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_karir',
            'judul',
            'open_date',
            'close_date',
            'kualifikasi',
            // 'experience',
            // 'usia',
            // 'jenis_kelamin',
            // 'deskripsi:ntext',
            // 'hit',
            // 'publish',
            // 'create_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
