<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Karir */

$this->title = $model->id_karir;
$this->params['breadcrumbs'][] = ['label' => 'Karirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="karir-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_karir], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_karir], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_karir',
            'judul',
            'open_date',
            'close_date',
            'kualifikasi',
            'experience',
            'usia',
            'jenis_kelamin',
            'deskripsi:ntext',
            'hit',
            'publish',
            'create_date',
        ],
    ]) ?>

</div>
