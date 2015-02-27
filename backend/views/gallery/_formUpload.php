<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Album;

/* @var $this yii\web\View */
/* @var $model app\models\Gallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-form">

     <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'jdl_gallery')->textInput(['maxlength' => 100]) ?>
	<?php
	$album=Album::find()->orderBy('jdl_album')->all();
	$listData=ArrayHelper::map($album,'id_album','jdl_album');
	echo $form->field($model, 'id_album')->dropDownList($listData,['prompt'=>'Pilih Album']);
	?>
    <?= $form->field($model, 'gallery_seo')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <?php
	if (!$model->isNewRecord){
	echo Html::img('picture/gallery/'.$model->gbr_gallery, ['alt'=>'some', 'width'=>'200']);
	}
	?>
    <?= $form->field($model, 'gbr_gallery')->fileInput() ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
