<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pesanan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="panel-heading">Data Pesanan</div>
    <div class="panel-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                // 'id_pesanan',
                'id_customer',
                // 'id_driver',
                // 'posisi_lat',
                // 'posisi_lng',
                'waktu_pesan',
                'waktu_acc',
                // 'total_budget',
                [
                    'attribute'=>'total_budget',
                    'value'=>function($model){
                        return 'Rp '.number_format($model->total_budget, "2", ',', '.');
                    }
                ],
                // 'status',
                'status_selesai',

                // ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>           
    </div>
</div>