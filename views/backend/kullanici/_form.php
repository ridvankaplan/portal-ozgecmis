<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Kullanici */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kullanici-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'isim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'soyisim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ozet')->textarea(array('rows'=>6,'cols'=>5)) ?>

    <?= $form->field($model, 'tel')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasyon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lise')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'universite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bolum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yetenek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sertifika')->textInput(['maxlength' => true]) ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
