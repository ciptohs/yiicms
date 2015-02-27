<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Download */

$this->title = 'Update Download: ' . ' ' . $model->id_download;
$this->params['breadcrumbs'][] = ['label' => 'Downloads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_download, 'url' => ['view', 'id' => $model->id_download]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="download-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
