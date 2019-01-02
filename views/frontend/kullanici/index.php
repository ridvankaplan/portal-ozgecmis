<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\KullaniciSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Özgeçmiş Oluşturma  ';
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
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'isim',
            'soyisim',
            'ozet',
            'tel',
            'email:email',
            'website',
            'lokasyon',
            'lise',
            'universite',
            'yetenek',
            'dil',
            'sertifika',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
