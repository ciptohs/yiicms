<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Karir */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="karir-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => 266]) ?>

  	<label>Open Date </label>
	<?= DatePicker::widget(['model' => $model,'attribute' => 'open_date','dateFormat' => 'yyyy-MM-dd',
    ]);
	?>

    <label>Close Date </label>
	<?= DatePicker::widget(['model' => $model,'attribute' => 'close_date','dateFormat' => 'yyyy-MM-dd',
    ]);
	?>

    <?= $form->field($model, 'kualifikasi')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'experience')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'usia')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'jenis_kelamin')->dropDownList([ '0'=>'Pria', '1'=>'Wanita','3'=>'All' ], ['prompt' => '']) ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 8]) ?>

    <?= $form->field($model, 'hit')->textInput() ?>

    <?= $form->field($model, 'publish')->dropDownList([ '0'=>'Publish', '1'=>'Unpublish', ], ['prompt' => '']) ?>

    <label>Create Date </label>
	<?= DatePicker::widget(['model' => $model,'attribute' => 'create_date','dateFormat' => 'yyyy-MM-dd',
    ]);
	?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
