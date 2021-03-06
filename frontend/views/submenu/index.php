<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SubmenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Submenus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="submenu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Submenu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_sub',
            'nama_sub',
            'link_sub',
            'id_main',
            'id_submain',
            // 'aktif',
            // 'adminsubmenu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
