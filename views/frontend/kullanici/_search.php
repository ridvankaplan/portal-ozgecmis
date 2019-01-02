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

    <?php $form->field($model, 'email') ?>

    <?php  $form->field($model, 'website') ?>

    <?php $form->field($model, 'lokasyon') ?>

    <?php $form->field($model, 'lise') ?>

    <?php $form->field($model, 'universite') ?>

    <?php $form->field($model, 'yetenek') ?>

    <?php $form->field($model, 'dil') ?>

    <?php  $form->field($model, 'sertifika') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
