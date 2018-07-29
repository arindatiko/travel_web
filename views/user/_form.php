<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Biodata User</b> Me</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'user_type')->dropDownList([ 'driver' => 'Driver', 'admin_kuliner' => 'Admin kuliner', 'admin_wisata' => 'Admin wisata', 'admin_hotel' => 'Admin hotel', 'admin_sistem' => 'Admin sistem', ], ['prompt' => '']) ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
        <!-- /.social-auth-links -->
    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->
