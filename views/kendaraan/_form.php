<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kendaraan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Data Kendaraan</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'merk')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'jenis')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'bahan_bakar')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
        <!-- /.social-auth-links -->
    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->