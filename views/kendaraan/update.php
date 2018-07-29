<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kendaraan */

$this->title = 'Update Kendaraan: ' . $model->id_jenis;
$this->params['breadcrumbs'][] = ['label' => 'Kendaraans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jenis, 'url' => ['view', 'id' => $model->id_jenis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kendaraan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
