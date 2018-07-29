<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penginapans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penginapan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penginapan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_penginapan',
            'id_user',
            'nama',
            'alamat',
            'no_telp',
            // 'posisi_lat',
            // 'posisi_lng',
            // 'foto:ntext',
            // 'deskripsi:ntext',
            // 'fasilitas:ntext',
            // 'akses',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
