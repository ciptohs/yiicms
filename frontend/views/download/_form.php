<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Download */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="download-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'nama_file')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'tgl_posting')->textInput() ?>

    <?= $form->field($model, 'hits')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
