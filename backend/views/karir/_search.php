<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KarirSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="karir-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_karir') ?>

    <?= $form->field($model, 'judul') ?>

    <?= $form->field($model, 'open_date') ?>

    <?= $form->field($model, 'close_date') ?>

    <?= $form->field($model, 'kualifikasi') ?>

    <?php // echo $form->field($model, 'experience') ?>

    <?php // echo $form->field($model, 'usia') ?>

    <?php // echo $form->field($model, 'jenis_kelamin') ?>

    <?php // echo $form->field($model, 'deskripsi') ?>

    <?php // echo $form->field($model, 'hit') ?>

    <?php // echo $form->field($model, 'publish') ?>

    <?php // echo $form->field($model, 'create_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
