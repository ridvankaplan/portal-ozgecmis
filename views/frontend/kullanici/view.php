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

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Özgeçmişi Sil ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

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
        ],
    ]) ?>

</div>
