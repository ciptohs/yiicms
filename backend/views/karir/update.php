<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Karir */

$this->title = 'Update Karir: ' . ' ' . $model->id_karir;
$this->params['breadcrumbs'][] = ['label' => 'Karirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_karir, 'url' => ['view', 'id' => $model->id_karir]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="karir-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
