<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\KullaniciSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kullanici-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'isim') ?>

    <?= $form->field($model, 'soyisim') ?>

    <?= $form->field($model, 'ozet') ?>

    <?= $form->field($model, 'tel') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'website') ?>

    <?= $form->field($model, 'lokasyon') ?>

    <?= $form->field($model, 'lise') ?>

    <?= $form->field($model, 'universite') ?>

    <?= $form->field($model, 'yetenek') ?>

    <?= $form->field($model, 'dil') ?>

    <?= $form->field($model, 'sertifika') ?>

    <?= $form->field($model, 'bolum') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
