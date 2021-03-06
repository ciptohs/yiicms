<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Submenu */

$this->title = 'Update Submenu: ' . ' ' . $model->id_sub;
$this->params['breadcrumbs'][] = ['label' => 'Submenus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_sub, 'url' => ['view', 'id' => $model->id_sub]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="submenu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
