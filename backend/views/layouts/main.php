<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

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
</head>
<body class="skin-blue">
    <?php $this->beginBody() ?>
    <div class="wrap">
      <header class="header">
        <?php
            NavBar::begin([
                'brandLabel' => 'CMS CIPTO',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar navbar-static-top',
					'role'=>'navigation',
                ],
            ]);
            $menuItems = [
                         ];
            if (!Yii::$app->user->isGuest) {
				$menuItems[] = ['label' => 'Artikel','class'=>'dropdown','url' => ['/artikel/index'],'linkOptions' => ['data-method' => 'post']];
				$menuItems[] = ['label' => 'Kategori','url' => ['/kategori/index'],'linkOptions' => ['data-method' => 'post']];
				$menuItems[] = ['label' => 'Komentar','url' => ['/komentar/index'],'linkOptions' => ['data-method' => 'post']];
				$menuItems[] = ['label' => 'Album','url' => ['/album/index'],'linkOptions' => ['data-method' => 'post']];
				$menuItems[] = ['label' => 'Agenda','url' => ['/agenda/index'],'linkOptions' => ['data-method' => 'post']];
				$menuItems[] = ['label' => 'Picture','url' => ['/gallery/index'],'linkOptions' => ['data-method' => 'post']];
				$menuItems[] = ['label' => 'Download','url' => ['/download/index'],'linkOptions' => ['data-method' => 'post']];
                $menuItems[] = ['label' => 'Logout (' . Yii::$app->user->identity->username . ')','url' => ['/site/logout'],'linkOptions' => ['data-method' => 'post']];
				
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>
        
        
</header>


        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
        </div>
    </div>

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
