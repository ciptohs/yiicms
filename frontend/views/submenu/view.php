<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Submenu */

$this->title = $model->id_sub;
$this->params['breadcrumbs'][] = ['label' => 'Submenus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="submenu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_sub], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_sub], [
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
            'id_sub',
            'nama_sub',
            'link_sub',
            'id_main',
            'id_submain',
            'aktif',
            'adminsubmenu',
        ],
    ]) ?>

</div>
