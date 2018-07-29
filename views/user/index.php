<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- <div class="panel panel-default">
  <div class="panel-heading">Data Admin</div>
  <div class="panel-body">
      
  </div>
</div> -->

<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">       
             <br>

            <div class="c-content-tab-1 c-theme c-margin-t-30">
                <div class="clearfix">
                    <ul class="nav nav-tabs c-font-uppercase c-font-bold">
                         <li class="active">
                            <a href="#tab_1_1_content" data-toggle="tab">Admin Wisata</a>
                        </li>
                        <li>
                            <a href="#tab_1_2_content" data-toggle="tab">Admin Hotel</a>
                        </li>
                        <li>
                            <a href="#tab_1_3_content" data-toggle="tab">Admin Kuliner</a>
                        </li>
                        <li>
                            <a href="#tab_1_4_content" data-toggle="tab">Driver</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content c-bordered c-padding-lg">
                    <div class="tab-pane active" id="tab_1_1_content">
                         <div class="table-responsive">
                        <?php Pjax::begin(); ?>
                        <?= GridView::widget([
                            'dataProvider' => $dataProviderWisata,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                // 'id_user',
                                'username',
                                // 'password',
                                // 'Token',
                                'nama_lengkap',
                                // 'alamat',
                                'no_telp',
                                // 'user_type',

                                [
                                    'class' => 'yii\grid\ActionColumn',
                                    'template'=>'{view}'
                                ],
                            ],
                        ]); ?>
                        <?php Pjax::end(); ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_1_2_content">
                         <div class="table-responsive">
                        <?php Pjax::begin(); ?>
                        <?= GridView::widget([
                            'dataProvider' => $dataProviderHotel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                // 'id_user',
                                'username',
                                // 'password',
                                // 'Token',
                                'nama_lengkap',
                                // 'alamat',
                                'no_telp',
                                // 'user_type',

                                [
                                    'class' => 'yii\grid\ActionColumn',
                                    'template'=>'{view}'

                                ],
                            ],
                        ]); ?>
                        <?php Pjax::end(); ?>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab_1_3_content">
                         <div class="table-responsive">
                        <?php Pjax::begin(); ?>
                        <?= GridView::widget([
                                'dataProvider' => $dataProviderKuliner,
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                    // 'id_user',
                                    'username',
                                    // 'password',
                                    // 'Token',
                                    'nama_lengkap',
                                    // 'alamat',
                                    'no_telp',
                                    // 'user_type',

                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        'template'=>'{view}'
                                    ],
                                ],
                            ]); ?>
                        <?php Pjax::end(); ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_1_4_content">
                         <div class="table-responsive">
                        <?php Pjax::begin(); ?>
                        <?= GridView::widget([
                                'dataProvider' => $dataProviderDriver,
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                    // 'id_user',
                                    'username',
                                    // 'password',
                                    // 'Token',
                                    'nama_lengkap',
                                    // 'alamat',
                                    'no_telp',
                                    // 'user_type',

                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        'template'=>'{view}'
                                    ],
                                ],
                            ]); ?>
                        <?php Pjax::end(); ?>
                        </div>
                    </div>

                </div>

            </div>
            
        </div>
        <!-- /.box-body -->
      </div>
    </div>
</div>
