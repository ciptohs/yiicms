<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
</head>

<body>
    <?php $this->beginBody() ?>

       <div class="header">
        <div class="container">
      
            <div class="header_top">
                    <div class="logo">

                      <?= Html::a("<img src='../../backend/web/picture/gallery/logo.png'>",Yii::$app->urlManager->createUrl(['site']), ['class' => '']) ?>
                    </div>
                    <div class="menu">
                        <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
                        <ul class="nav" id="nav">
                            <li><?= Html::a('Home',Yii::$app->urlManager->createUrl(['site']), ['class' => '']) ?></li>
                            <li><?= Html::a('Profile',Yii::$app->urlManager->createUrl(['site','#'=>'profile']), ['class' => '']) ?></li>
                            <li><?= Html::a('Services',Yii::$app->urlManager->createUrl(['site','#'=>'services']), ['class' => '']) ?></li>
                            <li><?= Html::a('Portfolio',Yii::$app->urlManager->createUrl(['site','#'=>'portfolio']), ['class' => '']) ?></li>
                            <li><?= Html::a('News',Yii::$app->urlManager->createUrl(['artikel/index']), ['class' => '']) ?></li>
                            <li><?= Html::a('Gallery',Yii::$app->urlManager->createUrl(['gallery/index']), ['class' => '']) ?></li>
                            <li><?= Html::a('Career',Yii::$app->urlManager->createUrl(['career/index']), ['class' => '']) ?></li>
                           <!-- <li><?= Html::a('Download',Yii::$app->urlManager->createUrl(['download/index']), ['class' => '']) ?></li> -->
                            <li><?= Html::a('Contact',Yii::$app->urlManager->createUrl(['site/contact']), ['class' => '']) ?></li>               
                        </ul>
                        <script type="text/javascript" src="js/responsive-nav.js"></script>
                    </div>                          
                    <div class="clearfix"> </div>
                    <!----//End-top-nav---->
                 </div>
                </div>
            </div>
        </div>
    </div>

    
    
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>



    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
