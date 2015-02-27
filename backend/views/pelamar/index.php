<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PelamarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pelamars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pelamar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pelamar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pelamar',
            'id_karir',
            'nama',
            'email:email',
            'alamat:ntext',
            // 'telepon',
            // 'file_cv',
            // 'cretae_date',
            // 'ip_addres',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
