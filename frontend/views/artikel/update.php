<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Artikel */

$this->title = 'Update Artikel: ' . ' ' . $model->id_berita;
$this->params['breadcrumbs'][] = ['label' => 'Artikels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_berita, 'url' => ['view', 'id' => $model->id_berita]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="artikel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
