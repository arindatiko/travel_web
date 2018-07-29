<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model app\models\Penginapan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penginapan-form">

    

</div>

<div class="login-box" style="width: 500px">
    <div class="login-logo">
        <a href="#"><b>Penginapan</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <?php $form = ActiveForm::begin(); ?>

        <!-- <?= $form->field($model, 'id_user')->textInput() ?> -->

        <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'posisi_lat')->textInput(['maxlength' => true]) ?>
                
            </div>
            <div class="col-md-6">                
                <?= $form->field($model, 'posisi_lng')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <?= $form->field($model, 'file[]')->widget(FileInput::classname(), [
                    'options' => [
                        'multiple' => 'true',
                        ],
                    'pluginOptions' => [
                            'showUpload' => false,
                            'required'=>true
                        ],
                    ])
            ?>
        <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'fasilitas')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'akses')->dropDownList([ 'mudah' => 'Mudah', 'sulit' => 'Sulit', 'sedang' => 'Sedang', ], ['prompt' => '']) ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
        <!-- /.social-auth-links -->
    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->