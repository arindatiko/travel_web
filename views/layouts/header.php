<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">Travel Me</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">
        
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        
        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <!-- Messages: style can be found in dropdown.less-->
                <!-- Tasks: style can be found in dropdown.less -->
                <!-- User Account: style can be found in dropdown.less -->
                <!-- User Account: style can be found in dropdown.less -->
                <li>
                    
                    <?= Html::a(
                        'Keluar',
                        ['/site/logout'],
                        ['data-method' => 'post']
                    ) ?>
                    
                </li>
            </ul>
        </div>
    </nav>
</header>
