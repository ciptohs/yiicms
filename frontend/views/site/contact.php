<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
?>

<div class="map">
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
</div>
<div class="container">

    <div class="col-md-9">
         <h1 class="center">Contact Us</h1>
        <div class="single_contact contact_left">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'subject') ?>
                <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        
        </div>
    </div>
         <div class="col-md-3 contact_right">
            <h2>Information</h2>
            <ul class="address">
                <i class="address_icon"> </i>
                <li class="address_desc">
                    <p>standard dummy text ever since</p>
                </li>
                <div class="clearfix"> </div>
            </ul>
            <ul class="address">
                <i class="msg_icon"> </i>
                <li class="address_desc">
                    <p><a href="malito:mail@demolink.org">mail(at)gelios.com</a><br> <a href="malito:mail@demolink.org">mail(at)gelios.com</a></p>
                </li>
                <div class="clearfix"> </div>
            </ul>
            <ul class="address">
                <i class="phone_icon"> </i>
                <li class="address_desc">
                    <p>+215-5487-5487<br> +215-3487-5887</p>
                </li>
                <div class="clearfix"> </div>
            </ul>
            <h2 class="m_5">Business Hours</h2>
            <p>Monday-Friday : 9am to 10pm</p>
            <p>Saturday : 9am to 7pm</p>
            <p>Sunday : Day Off</p>
         </div>
    </div>
</div>