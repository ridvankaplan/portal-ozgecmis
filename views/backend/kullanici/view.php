<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Kullanici */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Özgeçmiş', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kullanici-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
            'bolum',
        ],
    ]) ?>

</div>
