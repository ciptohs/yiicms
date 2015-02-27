<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pelamar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pelamar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_karir')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'telepon')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'file_cv')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'cretae_date')->textInput() ?>

    <?= $form->field($model, 'ip_addres')->textInput(['maxlength' => 50]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
