<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Agenda */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="agenda-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tema')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'tema_seo')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'isi_agenda')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tempat')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'pengirim')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'tgl_mulai')->textInput() ?>

    <?= $form->field($model, 'tgl_selesai')->textInput() ?>

    <?= $form->field($model, 'tgl_posting')->textInput() ?>

    <?= $form->field($model, 'jam')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 50]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
