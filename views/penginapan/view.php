<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\data\ActiveDataProvider;
use app\models\Kamar;
use yii\helpers\Url;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $model app\models\Penginapan */
$userStatus =  Yii::$app->user->identity->status;
$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Penginapans', 'url' => ['view', 'idUser'=>$idUser]];
$this->params['breadcrumbs'][] = $this->title;
?>

<h4><?= $userStatus!=1 ? '<span class="label label-danger">Belum Verifikasi</span>' : '' ?></h4>
<?php foreach ($model as $key => $value) { ?>
        <div class="panel panel-default">
            <div class="panel-heading">Data Hotel <b><?=$value->nama?></b>
                <?php if ($userStatus==1) {?>
                <?= Html::a('Update', ['update', 'id' => $value->id_penginapan], ['class' => 'btn btn-primary pull-right']) ?>
                <?= Html::a('Add Room', ['/kamar/create', 'idPenginapan' => $value->id_penginapan, 'idUser'=>$value->id_user], ['class' => 'btn btn-danger pull-right']) ?>
                <?php } ?>
            </div>
            
            
            <div class="panel-body">
                <div class="col-md-12">
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
                <?php 
                $dataProvider = new ActiveDataProvider([
                    'query' => Kamar::find()->where(['id_penginapan'=>$value->id_penginapan]),
                ]);
                ?>

                <hr>
                <h3>Kamar</h3>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        // 'id_menu',
                        // 'id_kuliner',
                        'nama',
                        'banyak_kamar',
                        'kapasitas',
                        // 'fasilitas:ntext',
                        // 'harga',
                        // 'foto:ntext',
                        [
                                'attribute' => 'foto',
                                // 'format' => 'html',
                                'format' => 'raw',
                                'label' => 'Gambar ',
                                'value' => function ($value,$path) {
                                    
                                    $gambar = '';
                                    $images = explode("**", $value['foto']);
                                    for($i=0;$i<count($images)-1;$i++){
                                       $gambar= $gambar.Html::img(\Yii::$app->urlManager->createUrl('uploads/kamar/'.$images[$i]),
                                      ['width' => '100px',
                                      'class'=>'gambar',
                                      'style'=>'margin-left:1%'
                                      ]);
                                    }
                                    return $gambar;
                                    
                                
                                },
                            ],
                        // 'deskripsi:ntext',

                        [
                            'class' => 'yii\grid\ActionColumn',
                            'template'=>'{update} {delete}',
                            'buttons'=>[
                                'update'=>function($url,$model, $key){
                                    $userStatus = $idUser = Yii::$app->user->identity->status;
                                    $url = Url::toRoute(['/kamar/update', 'id' => $key]);
                                    if ($userStatus==1) {
                                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                            'title' => 'update',
                                        ]);
                                    }
                                },

                                'delete'=>function($url,$model, $key){
                                    $userStatus = $idUser = Yii::$app->user->identity->status;
                                    $url = Url::toRoute(['/kamar/delete', 'id' => $key]);
                                    if ($userStatus==1) {
                                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                            'title' => 'delete',
                                            'data-confirm'=>"Are you sure you want to delete this item?",
                                            'data-method'=>"post"
                                        ]);
                                    }
                                }
                            ]

                        ],
                    ],
                ]); ?>
            </div>
        </div>
    <?php } ?>