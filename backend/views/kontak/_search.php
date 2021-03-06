<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KontakSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kontak-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_hubungi') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'subjek') ?>

    <?= $form->field($model, 'pesan') ?>

    <?php // echo $form->field($model, 'tanggal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
