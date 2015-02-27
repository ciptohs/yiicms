<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Gallery */

$this->title = $model->id_gallery;
$this->params['breadcrumbs'][] = ['label' => 'Galleries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <div class="row">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       <div class="span4">
    <?= Html::img('picture/gallery/'.$model->gbr_gallery,['class'=>'span2']) ?>
   </div>
    <div class="span8">
      <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_gallery',
            'nama_album',
            'jdl_gallery',
            'gallery_seo',
        ],
    ]) ?>
    </div>
<?= Html::a('Update', ['update', 'id' => $model->id_gallery], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_gallery], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>

</div>
