<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Album */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="album-form">

 <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    <?= $form->field($model, 'jdl_album')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'album_seo')->textInput(['maxlength' => 100]) ?>
	<?php
	if (!$model->isNewRecord){
	echo Html::img('picture/album/'.$model->gbr_album, ['alt'=>'some', 'width'=>'200']);
	}
	?>
    <?= $form->field($model, 'gbr_album')->fileInput() ?>

    <?= $form->field($model, 'aktif')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
