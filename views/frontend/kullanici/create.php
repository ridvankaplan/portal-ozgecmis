<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Kullanici */

$this->title = 'Özgeçmiş Oluşturma';
$this->params['breadcrumbs'][] = ['label' => 'Kullanicis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kullanici-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
