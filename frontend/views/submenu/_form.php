<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Submenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="submenu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_sub')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'link_sub')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'id_main')->textInput() ?>

    <?= $form->field($model, 'id_submain')->textInput() ?>

    <?= $form->field($model, 'aktif')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'adminsubmenu')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
