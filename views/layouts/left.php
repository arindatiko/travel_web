<?php
use yii\bootstrap\Nav;
$userType = Yii::$app->user->identity->user_type;
$idUser = Yii::$app->user->identity->id_user;
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= Yii::$app->homeUrl ?>/img/img.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?php  echo strtoupper(Yii::$app->user->identity->username)?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        

        <?=
        Nav::widget(
            [
                'encodeLabels' => false,
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    // ['label' => '<i class="fa fa-file-code-o"></i><span>Gii</span>', 'url' => ['/gii']],
                    [
                        'label' => '<i class="fa fa-user"></i><span>User Telah Verifikasi</span>', 
                        'url' => ['/user/index', 'status'=>1],
                        'visible'=> $userType == 'admin_sistem'
                    ],
                    [
                        'label' => '<i class="fa fa-user"></i><span>User Belum Verifikasi</span>', 
                        'url' => ['/user/index', 'status'=>0],
                        'visible'=> $userType == 'admin_sistem'
                    ],
                    /*[
                        'label' => '<i class="fa fa-list-alt"></i><span>Pesanan</span>', 
                        'url' => ['/pesanan/index'],
                        'visible'=> $userType == 'admin_sistem'
                    ],*/
                    [
                        'label' => '<i class="fa fa-list-alt"></i><span>Wisata</span>', 
                        'url' => ['/wisata/view', 'idUser'=>$idUser],
                        'visible'=> $userType == 'admin_wisata'
                    ],
                    [
                        'label' => '<i class="fa fa-list-alt"></i><span>Kuliner</span>', 
                        'url' => ['/kuliner/view', 'idUser'=>$idUser],
                        'visible'=> $userType == 'admin_kuliner'
                    ],
                    [
                        'label' => '<i class="fa fa-list-alt"></i><span>Hotel</span>', 
                        'url' => ['/penginapan/view', 'idUser'=>$idUser],
                        'visible'=> $userType == 'admin_hotel'
                    ],
                    // ['label' => '<i class="fa fa-dashboard"></i><span>Debug</span>', 'url' => ['/debug']],
                    // [
                    //     'label' => '<i class="glyphicon glyphicon-lock"></i><span>Sing in</span>', //for basic
                    //     'url' => ['/site/login'],
                    //     'visible' =>Yii::$app->user->isGuest
                    // ],
                ],
            ]
        );
        ?>
    </section>

</aside>
