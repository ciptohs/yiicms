<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Kategori;
use moonland\tinymce\TinyMCE;
use yii\imagine\Image;
/* @var $this yii\web\View */
/* @var $model app\models\Artikel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="artikel-form">
	<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    <?= $form->field($model, 'judul')->textInput(['maxlength' => 100]) ?>
    
    <?php 
	//use app\models\Country;
	$kategori=Kategori::find()->all();
	//use yii\helpers\ArrayHelper;
	$listData=ArrayHelper::map($kategori,'id_kategori','nama_kategori');
	echo $form->field($model, 'id_kategori')->dropDownList(
	                                $listData,
                                ['prompt'=>'Pilih Kategori']);
	?>


    <?= $form->field($model, 'headline')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

<?php
	echo $form->field($model, 'isi_berita')->widget(letyii\tinymce\Tinymce::className(), [
    'options' => [
        'id' => 'testid',
    ],
    'configs' => [ // Read more: http://www.tinymce.com/wiki.php/Configuration
		'height'=>400,
        'link_list' => [
            [
                'title' => 'My page 1',
                'value' => 'http://www.tinymce.com',
            ],
            [
                'title' => 'My page 2',
                'value' => 'http://www.tinymce.com',
            ],
        ],
    ],
]);
?>
    <?php
	if (!$model->isNewRecord){
	echo Html::img('picture/artikel/'.$model->gambar, ['alt'=>'some', 'width'=>'200']);
	}
	?>
	<?= $form->field($model, 'gambar')->fileInput() ?>
    <?= $form->field($model, 'tag')->textInput(['maxlength' => 100]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
