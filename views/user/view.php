<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->nama_lengkap;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?php if ($model->status == 0) { ?>
<?= Html::a('Verifikasi', ['verifikasi', 'idUser'=>$model->id_user], ['class' => 'btn btn-success']) ?>
<br>
<?php } ?>
<div class="panel panel-default">
    <div class="panel-heading">Data User</div>
    <div class="panel-body">
        <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    // 'id_user',
                    'username',
                    // 'Token',
                    'nama_lengkap',
                    // 'alamat',
                    'no_telp',
                    'user_type',
                ],
            ]) ?>        
    </div>
</div>

<?php if ($model->user_type=='admin_wisata') { ?>
<?php foreach ($modelData as $key => $value) { ?>
    <div class="panel panel-default">
        <div class="panel-heading">Data Wisata <b><?=$value->nama?></b></div>
        <div class="row">
            <div class="col-md-6">
                <?= DetailView::widget([
                    'model' => $value,
                    'attributes' => [
                        // 'nama',
                        'desa',
                        'kecamatan',
                        'tiket_masuk_dewasa',
                        'tiket_masuk_anak',
                        'biaya_parkir_motor',
                        'biaya_parkir_mobil',
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
                    ],
                ]) ?>
            </div>
            <div class="col-md-6">
                <?= DetailView::widget([
                    'model' => $modelData[0],
                    'attributes' => [
                        // 'nama',
                        // 'desa',
                        // 'kecamatan',
                        // 'tiket_masuk_dewasa',
                        // 'tiket_masuk_anak',
                        // 'biaya_parkir_motor',
                        // 'biaya_parkir_mobil',
                        'biaya_parkir_bus',
                        // 'foto:ntext',
                        'deskripsi:ntext',
                        'fasilitas:ntext',
                        // 'posisi_lat',
                        // 'posisi_lng',
                        // 'akses',
                        'jam_buka',
                        'jam_tutup',
                        'jenis',
                        // 'jam_datang',
                    ],
                ]) ?>
            </div>
        </div>
        <div class="col-md-6">
                <?= DetailView::widget([
                    'model' => $modelData[0],
                    'attributes' => [
                        [
                            'attribute' => 'foto',
                            // 'format' => 'html',
                            'format' => 'raw',
                            'label' => 'Gambar ',
                            'value' => function ($value,$path) {
                                
                                $gambar = '';
                                $images = explode("**", $value['foto']);
                                for($i=0;$i<count($images)-1;$i++){
                                   $gambar= $gambar.Html::img(\Yii::$app->urlManager->createUrl('uploads/wisata/'.$images[$i]),
                                  ['width' => '100px',
                                  'class'=>'gambar',
                                  'style'=>'margin-left:1%'
                                  ]);
                                }
                                return $gambar;
                                
                            
                            },
                        ],
                    ],
                ]) ?>
            </div>
        <div class="panel-body">        
        </div>
    </div>
<?php } ?>
<?php } ?>

<?php if ($model->user_type == 'admin_hotel') {?>
    <?php foreach ($modelData as $key => $value) { ?>
        <div class="panel panel-default">
            <div class="panel-heading">Data Hotel <b><?=$value->nama?></b></div>
            
            <div class="col-md-6">
                    <?= DetailView::widget([
                        'model' => $value,
                        'attributes' => [
                            'nama',
                            'alamat',
                            'no_telp',
                            // 'posisi_lat',
                            // 'posisi_lng',
                            // 'foto:ntext',
                            'deskripsi:ntext',
                            'fasilitas:ntext',
                            'akses',
                            [
                                'attribute' => 'foto',
                                // 'format' => 'html',
                                'format' => 'raw',
                                'label' => 'Gambar ',
                                'value' => function ($value,$path) {
                                    
                                    $gambar = '';
                                    $images = explode("**", $value['foto']);
                                    for($i=0;$i<count($images)-1;$i++){
                                       $gambar= $gambar.Html::img(\Yii::$app->urlManager->createUrl('uploads/penginapan/'.$images[$i]),
                                      ['width' => '100px',
                                      'class'=>'gambar',
                                      'style'=>'margin-left:1%'
                                      ]);
                                    }
                                    return $gambar;
                                    
                                
                                },
                            ],
                        ],
                    ]) ?>
                </div>
            <div class="panel-body">        
            </div>
        </div>
    <?php } ?>
<?php } ?>

<?php if ($model->user_type == 'admin_kuliner') { ?>
    <?php foreach ($modelData as $key => $value) { ?>
        <div class="panel panel-default">
            <div class="panel-heading">Data Kuliner <b><?=$value->nama?></b></div>
            
            <div class="panel-body">
                <div class="rows">
                    <div class="col-md-6">
                        <?= DetailView::widget([
                            'model' => $value,
                            'attributes' => [
                                // 'id_kuliner',
                                // 'id_user',
                                'nama',
                                'alamat',
                                'no_telp',
                                // 'posisi_lat',
                                // 'posisi_lng',
                                'harga_tiket_parkir_motor',
                                'harga_tiket_parkir_mobil',
                                'harga_tiket_parkir_bus',
                                // 'foto:ntext',
                                // 'deskripsi:ntext',
                                // 'fasilitas:ntext',
                                // 'jam_buka',
                                // 'jam_tutup',
                                // 'akses',
                                // 'harga_atas',
                            ],
                        ]) ?>      
                    </div>
                    <div class="col-md-6">
                        <?= DetailView::widget([
                            'model' => $value,
                            'attributes' => [
                                // 'id_kuliner',
                                // 'id_user',
                                // 'nama',
                                // 'alamat',
                                // 'no_telp',
                                // 'posisi_lat',
                                // 'posisi_lng',
                                // 'harga_tiket_parkir_motor',
                                // 'harga_tiket_parkir_mobil',
                                // 'harga_tiket_parkir_bus',
                                // 'foto:ntext',
                                'deskripsi:ntext',
                                'fasilitas:ntext',
                                'jam_buka',
                                'jam_tutup',
                                'akses',
                                'harga_atas',
                            ],
                        ]) ?>
                    </div>
                </div>
                    <?= DetailView::widget([
                        'model' => $value,
                        'attributes' => [
                            
                            [
                                'attribute' => 'foto',
                                // 'format' => 'html',
                                'format' => 'raw',
                                'label' => 'Gambar ',
                                'value' => function ($value,$path) {
                                    
                                    $gambar = '';
                                    $images = explode("**", $value['foto']);
                                    for($i=0;$i<count($images)-1;$i++){
                                       $gambar= $gambar.Html::img(\Yii::$app->urlManager->createUrl('uploads/kuliner/'.$images[$i]),
                                      ['width' => '100px',
                                      'class'=>'gambar',
                                      'style'=>'margin-left:1%'
                                      ]);
                                    }
                                    return $gambar;
                                    
                                
                                },
                            ],
                        ],
                    ]) ?>
            </div>
        </div>
    <?php } ?>
<?php } ?>

<?php if ($model->user_type == 'driver') { ?>
    <?php foreach ($modelData as $key => $value) { ?>
        <div class="panel panel-default">
            <div class="panel-heading">Data Kendaraan <b></b></div>
            
            <div class="panel-body">
                <?= DetailView::widget([
                    'model' => $value,
                    'attributes' => [
                        // 'id_jenis',
                        'merk',
                        'jenis',
                        'type',
                        'bahan_bakar',
                        // 'harga_bahan_bakar',
                    ],
                ]) ?>
            </div>
        </div>
    <?php } ?>
<?php } ?>