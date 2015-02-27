<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SubmenuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="submenu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_sub') ?>

    <?= $form->field($model, 'nama_sub') ?>

    <?= $form->field($model, 'link_sub') ?>

    <?= $form->field($model, 'id_main') ?>

    <?= $form->field($model, 'id_submain') ?>

    <?php // echo $form->field($model, 'aktif') ?>

    <?php // echo $form->field($model, 'adminsubmenu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
