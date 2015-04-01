<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Artikel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="artikel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kategori')->textInput() ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'judul_seo')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'headline')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'isi_berita')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'hari')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'jam')->textInput() ?>

    <?= $form->field($model, 'gambar')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'dibaca')->textInput() ?>

    <?= $form->field($model, 'tag')->textInput(['maxlength' => 100]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
