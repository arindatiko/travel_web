<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wisata';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wisata-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Wisata', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_wisata',
            'id_user',
            'nama',
            'desa',
            'kecamatan',
            // 'tiket_masuk_dewasa',
            // 'tiket_masuk_anak',
            // 'biaya_parkir_motor',
            // 'biaya_parkir_mobil',
            // 'biaya_parkir_bus',
            // 'foto:ntext',
            // 'deskripsi:ntext',
            // 'fasilitas:ntext',
            // 'posisi_lat',
            // 'posisi_lng',
            // 'akses',
            // 'jam_buka',
            // 'jam_tutup',
            // 'jenis',
            // 'jam_datang',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
