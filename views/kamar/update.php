<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kamar */

$this->title = 'Update Kamar: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Kamars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kamar, 'url' => ['view', 'id' => $model->id_kamar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kamar-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
