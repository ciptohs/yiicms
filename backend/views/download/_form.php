<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Download */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="download-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => 100]) ?>

    <?php
	if (!$model->isNewRecord){
	echo $model->nama_file;
	}
	?>
	<?= $form->field($model, 'nama_file')->fileInput() ?>

	 <?= DatePicker::widget(['model' => $model,'attribute' => 'tgl_posting',
        //'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]);
?>
    <?= $form->field($model, 'hits')->dropDownList([ '1' => 'Publish', '0' => 'Unpublish', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
