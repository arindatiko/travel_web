<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kuliners';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kuliner-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kuliner', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kuliner',
            'id_user',
            'nama',
            'alamat',
            'no_telp',
            // 'posisi_lat',
            // 'posisi_lng',
            // 'harga_tiket_parkir_motor',
            // 'harga_tiket_parkir_mobil',
            // 'harga_tiket_parkir_bus',
            // 'foto:ntext',
            // 'deskripsi:ntext',
            // 'fasilitas:ntext',
            // 'jam_buka',
            // 'jam_tutup',
            // 'akses',
            // 'harga_atas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
