<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pelamar */

$this->title = 'Update Pelamar: ' . ' ' . $model->id_pelamar;
$this->params['breadcrumbs'][] = ['label' => 'Pelamars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pelamar, 'url' => ['view', 'id' => $model->id_pelamar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pelamar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
