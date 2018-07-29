<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Wisata */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Wisatas', 'url' => ['view', 'idUser'=>$idUser]];
$this->params['breadcrumbs'][] = $this->title;
$userStatus = $idUser = Yii::$app->user->identity->status;
?>
<div class="wisata-view">

    <h4><?= $userStatus!=1 ? '<span class="label label-danger">Belum Verifikasi</span>' : '' ?></h4>

    <?php foreach ($model as $key => $value) { ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            Data Wisata <b><?=$value->nama?></b>
            <?php if ($userStatus==1) {?>
                <?= Html::a('Update', ['update', 'id' => $value->id_wisata], ['class' => 'btn btn-primary pull-right btn-sm']) ?>
                <?php } ?>
        </div>
        <div class="panel-body"> 
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
                    'model' => $value,
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
               
        </div>
    </div>
<?php } ?>

</div>
