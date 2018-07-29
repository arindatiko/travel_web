<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kendaraans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kendaraan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kendaraan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_jenis',
            'merk',
            'jenis',
            'type',
            'bahan_bakar',
            // 'harga_bahan_bakar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
