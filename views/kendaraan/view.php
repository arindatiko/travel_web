<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Kendaraan */

$this->title = $model->id_jenis;
$this->params['breadcrumbs'][] = ['label' => 'Kendaraans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kendaraan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_jenis], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_jenis], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_jenis',
            'merk',
            'jenis',
            'type',
            'bahan_bakar',
            'harga_bahan_bakar',
        ],
    ]) ?>

</div>
