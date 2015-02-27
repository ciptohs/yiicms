<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Menu;
/* @var $this yii\web\View */
/* @var $model app\models\Submenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="submenu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_sub')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'link_sub')->textInput(['maxlength' => 100]) ?>
	<?php 
		$main_menu=Menu::find()->all();
		$listData=ArrayHelper::map($main_menu,'id_main','nama_menu');
		echo $form->field($model, 'id_main')->dropDownList($listData);
    ?>
    <?= $form->field($model, 'aktif')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'adminsubmenu')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
