<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use app\models\Menu;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\Kuliner */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Kuliners', 'url' => ['view', 'idUser'=>$idUser]];
$this->params['breadcrumbs'][] = $this->title;
$userStatus =  Yii::$app->user->identity->status;
?>
<h4><?= $userStatus!=1 ? '<span class="label label-danger">Belum Verifikasi</span>' : '' ?></h4>
<?php foreach ($modelKuliner as $key => $value) { ?>
        <div class="panel panel-default">
            <div class="panel-heading">Data Kuliner <b><?=$value->nama?></b>
                <?php if ($userStatus==1) {?>
                <?= Html::a('Update', ['update', 'id' => $value->id_kuliner], ['class' => 'btn btn-primary pull-right']) ?>
                <?= Html::a('Add Menu', ['/menu/create', 'idKuliner' => $value->id_kuliner, 'idUser'=>$value->id_user], ['class' => 'btn btn-danger pull-right']) ?>
                <?php } ?>
            </div>
            <div class="panel-body">
                <div class="rows">
                    <div class="col-md-6">
                        <?= DetailView::widget([
                            'model' => $value,
                            'attributes' => [
                                'nama',
                                'alamat',
                                'no_telp',
                                'harga_tiket_parkir_motor',
                                'harga_tiket_parkir_mobil',
                                'harga_tiket_parkir_bus',
                            ],
                        ]) ?>      
                    </div>
                    <div class="col-md-6">
                        <?= DetailView::widget([
                            'model' => $value,
                            'attributes' => [
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
                <?php 
                $dataProvider = new ActiveDataProvider([
                    'query' => Menu::find()->where(['id_kuliner'=>$value->id_kuliner]),
                ]);
                ?>

                <hr>
                <h3>Menu</h3>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        // 'id_menu',
                        // 'id_kuliner',
                        'nama',
                        'harga',
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
                                       $gambar= $gambar.Html::img(\Yii::$app->urlManager->createUrl('uploads/menu/'.$images[$i]),
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
                                    $url = Url::toRoute(['/menu/update', 'id' => $key]);
                                    if ($userStatus==1) {
                                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                            'title' => 'update',
                                        ]);
                                    }
                                },

                                'delete'=>function($url,$model, $key){
                                    $userStatus = $idUser = Yii::$app->user->identity->status;
                                    $url = Url::toRoute(['/menu/delete', 'id' => $key]);
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
