<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
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
	<label>Tanggal Mulai </label>
    <?= DatePicker::widget(['model' => $model,'attribute' => 'tgl_mulai',
        //'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]);
	?>
	<label>Tanggal</label>
    <?= DatePicker::widget(['model' => $model,'attribute' => 'tgl_selesai',
        //'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]);
	?>
<label>Tanggal</label>
     <?= DatePicker::widget(['model' => $model,'attribute' => 'tgl_posting',
        //'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]);
?>

    <?= $form->field($model, 'jam')->textInput(['maxlength' => 50,'placeholder'=>'07:00']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
