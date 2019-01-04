<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\KullaniciSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

/* @var $model frontend\models\Kullanici */
$this->title = 'Özgeçmiş';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kullanici-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Özgeçmiş Oluşturma', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'isim',
            'soyisim',
            ['class'    => 'yii\grid\ActionColumn']

        ],
    ]); ?>


</div>
